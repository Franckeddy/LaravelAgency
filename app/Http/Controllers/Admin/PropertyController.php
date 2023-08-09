<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PropertyFormRequest;
use App\Models\Option;
use App\Models\Property;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    final public function index(): View {
        return view('admin.properties.index', [
            'properties' => Property::orderBy('created_at', 'desc')->paginate(25),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    final public function create(): View {
        $property = new Property();
        $property->fill([
            'surface' => 40,
            'rooms' => 1,
            'bedrooms' => 1,
            'floor' => 0,
            'price' => 100000,
            'city' => 'Paris',
            'postal_code' => '75000',
            'sold' => false,

        ]);
        return view('admin.properties.form', [
            'property' => $property,
            'options' => Option::pluck('name', 'id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    final public function store(PropertyFormRequest $request): RedirectResponse {
        $property = Property::create($request->validated());
        $property->options()->sync($request->validated()['options']);
        return to_route('admin.property.index')->with('success', "Le bien {$property->title} à été créé");
    }

    /**
     * Show the form for editing the specified resource.
     */
    final public function edit(Property $property): View {
        return view('admin.properties.form', [
            'property' => $property,
            'options' => Option::pluck('name', 'id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    final public function update(PropertyFormRequest $request, Property $property): RedirectResponse {
        $property->update($request->validated());
        $property->options()->sync($request->validated()['options']);
        return to_route('admin.property.index')->with('success', "Le bien {$property->title} à été modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    final public function destroy(Property $property): RedirectResponse {
        $property->delete();
        return to_route('admin.property.index')->with('success', "Le bien {$property->title} à été supprimé");
    }
}
