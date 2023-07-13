@extends('base')

@section('title', 'Tous nos biens')

@section('content-property')
    <h1 class="">Nos derniers Biens</h1>

    <div class="bg-white flex">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @foreach($properties as $property)
                        @include('component.property.card', ['property' => $property])
                @endforeach
            </div>
        </div>
    </div>
@endsection

