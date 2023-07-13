@extends('base')

@section('title', 'Tous nos biens')

@section('content-property')
    <h1 class="">Selection des crit&egrave;res de recherche</h1>

    <div class="bg-white flex">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @forelse($properties as $property)
                    <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}" class="group">
                        @include('component.property.card', ['property' => $property])
                    </a>
                @empty
                    <div role="alert" class="rounded border-s-4 border-yellow-500 bg-yellow-50 p-4">
                        <div class="flex items-center gap-2 text-yellow-800">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                class="h-5 w-5"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                    clip-rule="evenodd"
                                />
                            </svg>

                            <strong class="block font-medium"> Attention </strong>
                        </div>

                        <p class="mt-2 text-sm text-yellow-700">
                            Aucuns bien ne correspond à votre recherche
                        </p>
                    </div>
                @endforelse
            </div>
            {{ $properties->links() }}
        </div>
    </div>

@endsection
