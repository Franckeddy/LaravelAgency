@extends('admin.admin')

@section('title', $property->exists ? 'Modifier un bien' : 'Créer un bien')

@section('content')

    <section class="bg-gray-100">
        <div class="mx-auto max-w-screen-xl px-4 py-4 sm:px-6 lg:px-8">
                <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3">
                    <form action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}" method="POST" class="space-y-4">
                        @csrf
                        @method($property->exists ? 'PUT' : 'POST')

                        <div class="grid grid-cols-1 gap-4 lg:grid-cols-[1fr_120px] lg:gap-8">
                            @include('shared.input', ['class' => 'rounded-lg', 'label' => 'Titre', 'placeholder' => 'Titre du bien', 'name' => 'title', 'value' => $property->title])
                            @if(\Route::current()->getName() !== 'admin.property.create')
                                @include('shared.checkbox', ['class' => 'rounded-lg gap-2 flex-col-reverse', 'placeholder' => 'Vendu', 'name' => 'sold', 'value' => $property->sold])
                            @endif
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            @include('shared.input', ['placeholder' => 'Surface', 'name' => 'surface', 'value' => $property->surface])
                            @include('shared.input', ['placeholder' => 'Prix', 'name' => 'price', 'value' => $property->price])
                        </div>

                        <div>
                            @include('shared.input', ['type' => 'textarea', 'placeholder' => 'Description', 'name' => 'description', 'value' => $property->description])
                        </div>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                            @include('shared.input', ['placeholder' => 'Pieces', 'name' => 'rooms', 'value' => $property->rooms])
                            @include('shared.input', ['placeholder' => 'Chambres', 'name' => 'bedrooms', 'value' => $property->bedrooms])
                            @include('shared.input', ['placeholder' => 'Etage', 'name' => 'floor', 'value' => $property->floor])
                        </div>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                            @include('shared.input', ['placeholder' => 'Adresse', 'name' => 'address', 'value' => $property->address])
                            @include('shared.input', ['placeholder' => 'Ville', 'name' => 'city', 'value' => $property->city])
                            @include('shared.input', ['placeholder' => 'Code Postal', 'name' => 'postal_code', 'value' => $property->postal_code])
                        </div>
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                            @include('shared.select', ['placeholder' => 'Options', 'name' => 'options', 'value' => $property->options()->pluck('id'), 'multiple' => true, 'options' => $options])
                        </div>
                        <div class="mt-4">
                            <button class="w-full px-4 py-2 text-white font-medium bg-indigo-600 hover:bg-indigo-500 active:bg-indigo-600 rounded-lg duration-150">
                                @if($property->exists)
                                    Modifier
                                @else
                                    Créer
                                @endif
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
