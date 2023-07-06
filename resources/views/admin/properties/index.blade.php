@extends('admin.admin')

@section('title', 'Tous les biens')

@section('content')
    <div class="max-w-screen-xl mx-auto px-4 mt-6">
                <div class="items-start justify-between md:flex">
                    <div class="max-w-lg">
                        <h3 class="text-gray-800 text-xl font-bold sm:text-2xl">
                            @yield('title')
                        </h3>
                    </div>
                    @if(session('success'))
                        <div
                            role="alert"
                            class="rounded-xl border border-gray-100 bg-white p-4 shadow-xl"
                        >
                            <div class="flex items-start gap-4">
    <span class="text-green-600">
      <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="h-6 w-6"
      >
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
        />
      </svg>
    </span>
                                <div class="flex-1">
                                    <p class="mt-1 text-sm text-gray-700">
                                        {{ session('success') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                    @endif

                    <div class="mt-3 md:mt-0">
                        <a href="{{ route('admin.property.create') }}" class="inline-block px-4 py-2 text-white duration-150 font-medium bg-indigo-600 rounded-lg hover:bg-indigo-500 active:bg-indigo-700 md:text-sm">
                            Ajouter un Bien
                        </a>
                    </div>
                </div>
                <div class="mt-12 relative h-max overflow-auto">
                    <table class="w-full table-auto text-sm">
                        <thead class="text-gray-600 font-medium border-b">
                        <tr>
                            <th class="py-3 pr-6 text-left">Titre</th>
                            <th class="py-3 pr-6 text-center">Surface</th>
                            <th class="py-3 pr-6 text-center">Prix</th>
                            <th class="py-3 pr-6 text-center">Ville</th>
                            <th class="py-3 pr-6 text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-600 divide-y">
                        @foreach($properties as $property)
                            <tr>
                                <td class="w-96 pr-6 py-4 whitespace-nowrap">{{ $property->title }}</td>
                                <td class="pr-6 py-4 whitespace-nowrap text-center">{{ $property->surface }}m2</td>
                                <td class="pr-6 py-4 whitespace-nowrap text-center">
                        <span class="px-3 py-2 rounded-full font-semibold text-xs">
                            {{ number_format($property->price, thousands_separator: ' ') }}
                        </span>
                                </td>
                                <td class="pr-6 py-4 whitespace-nowrap text-center">{{ $property->city }}</td>
                                <td class="whitespace-nowrap text-right">
                                    <div class="inline-flex rounded-lg border border-gray-100 bg-gray-100 p-1">
                                        <a
                                            class="inline-flex items-center gap-2 rounded-md px-4 py-2 text-sm text-gray-500 hover:text-gray-700 focus:relative"
                                            href="{{ route('admin.property.edit', $property) }}"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke-width="1.5"
                                                stroke="currentColor"
                                                class="h-4 w-4"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"
                                                />
                                            </svg>

                                            Edit
                                        </a>

                                        <form
                                            class="inline-flex items-center gap-2 rounded-md bg-white px-4 py-2 text-sm text-red-600 shadow-sm focus:relative"
                                            action="{{ route('admin.property.destroy', $property) }}" method="post"
                                        >
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="focus:outline-none flex">

                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke-width="1.5"
                                                    stroke="currentColor"
                                                    class="h-4 w-4"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                                    />
                                                </svg>
                                                Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $properties->links('pagination::tailwind') }}
            </div>
@endsection
