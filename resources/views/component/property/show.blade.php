@extends('base')

@section('title', $property->title)

@section('content-property')

    <section>
        <div class="relative mx-auto max-w-screen-xl px-4 py-8">
            <div class="grid grid-cols-1 items-start gap-8 md:grid-cols-2">
                <div class="grid grid-cols-2 gap-4 md:grid-cols-1">
                    <img
                        alt="Les Paul"
                        src="https://images.unsplash.com/photo-1456948927036-ad533e53865c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                        class="aspect-square w-full rounded-xl object-cover"
                    />

                    <div class="grid grid-cols-2 gap-4 lg:mt-4">
                        <img
                            alt="Les Paul"
                            src="https://images.unsplash.com/photo-1456948927036-ad533e53865c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                            class="aspect-square w-full rounded-xl object-cover"
                        />

                        <img
                            alt="Les Paul"
                            src="https://images.unsplash.com/photo-1456948927036-ad533e53865c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                            class="aspect-square w-full rounded-xl object-cover"
                        />

                        <img
                            alt="Les Paul"
                            src="https://images.unsplash.com/photo-1456948927036-ad533e53865c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                            class="aspect-square w-full rounded-xl object-cover"
                        />

                        <img
                            alt="Les Paul"
                            src="https://images.unsplash.com/photo-1456948927036-ad533e53865c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                            class="aspect-square w-full rounded-xl object-cover"
                        />
                    </div>
                </div>

                <div class="sticky top-0">
                    @if($property->status === true)
                        <strong
                            class="rounded-full border border-red-600 bg-gray-100 px-3 py-0.5 text-xs font-medium tracking-wide text-red-600"
                        >
                            {{ $property->status }}
                        </strong>
                    @else
                        <strong class="rounded-full border border-green-600 bg-gray-100 px-3 py-0.5 text-xs font-medium tracking-wide text-green-600">
                            A Vendre
                        </strong>
                    @endif

                    <div class="mt-8 flex justify-between">
                        <div class="max-w-[35ch] space-y-2">
                            <h1 class="text-xl font-bold sm:text-2xl">
                                {{ $property->title }}
                            </h1>
                        </div>

                        <p class="text-lg font-bold">{{ number_format( $property->price, thousands_separator: ' ')}} €</p>
                    </div>

                    <div class="mt-4">
                        <div class="prose max-w-none">
                            <p>
                                {{ $property->description }}
                            </p>
                        </div>
                    </div>

                    <form class="mt-8">
                        <fieldset>
                            <legend class="mb-1 text-sm font-medium text-black">Surface</legend>
                            <div class="flex flex-wrap gap-1">
                                <label for="color_tt" class="cursor-pointer">
                                    <input
                                        type="radio"
                                        name="color"
                                        id="color_tt"
                                        class="peer sr-only"
                                    />

                                    <span
                                        class="inline-block rounded-full text-xs font-medium"
                                    >{{ $property->surface }} m2</span>
                                </label>
                            </div>
                        </fieldset>
                        <div class="flex gap-10">
                        <fieldset class="mt-4">
                            <legend class="mb-1 text-sm font-medium text-black">Pi&egrave;ces</legend>
                            <div class="flex flex-wrap gap-1">
                                <label for="color_tt" class="cursor-pointer">
                                    <input
                                        type="radio"
                                        name="color"
                                        id="color_tt"
                                        class="peer sr-only"
                                    />

                                    <span
                                        class="inline-block rounded-full text-xs font-medium"
                                    >{{ $property->rooms }}</span>
                                </label>
                            </div>
                        </fieldset>
                        <fieldset class="mt-4">
                            <legend class="mb-1 text-sm font-medium text-black">Chambres</legend>
                            <div class="flex flex-wrap gap-1">
                                <label for="color_tt" class="cursor-pointer">
                                    <input
                                        type="radio"
                                        name="color"
                                        id="color_tt"
                                        class="peer sr-only"
                                    />

                                    <span
                                        class="inline-block rounded-full text-xs font-medium"
                                    >{{ $property->bedrooms }}</span>
                                </label>
                            </div>
                        </fieldset>
                            <fieldset class="mt-4">
                                <legend class="text-sm font-medium text-black">Etage</legend>
                                <div class="flex flex-wrap gap-1">
                                    <label for="color_tt">
                                        <input
                                            type="radio"
                                            name="color"
                                            id="color_tt"
                                            class="peer sr-only"
                                        />

                                        <span class="inline-block rounded-full text-xs font-medium">
                                        {{ $property->floor ?? 'Rez de chaussée' }}
                                    </span>
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                        <fieldset class="mt-4">
                            <legend class="mb-1 text-sm font-medium text-black">Adresse</legend>
                            <div class="flex flex-wrap gap-1">
                                    <span class="inline-flex items-center justify-center text-xs font-medium">
                                        {{ $property->address }},
                                    </span>
                                    <span class="inline-flex items-center justify-center text-xs font-medium">
                                        {{ $property->city }}
                                    </span>
                                    <span class="group inline-flex items-center justify-center text-xs font-medium">
                                        {{ $property->postal_code }}
                                    </span>
                            </div>
                        </fieldset>
                        <fieldset class="mt-4">
                            @if($property->options->count() > 0)
                                <legend class="mb-1 text-sm font-medium text-black">Sp&eacute;cificit&eacute;s</legend>
                                @foreach($property->options as $option)
                                    <div class="flex flex-wrap gap-1">
                                        <label for="color_tt">
                                            <input type="radio" name="color" id="color_tt" class="peer sr-only">
                                            <span class="group inline-block rounded-full border px-3 py-1 text-xs font-medium peer-checked:bg-black peer-checked:text-white">
                                        {{ $option->name }}
                                    </span>
                                        </label>
                                    </div>
                                @endforeach
                            @endif
                        </fieldset>
                        <section class="bg-white">
                            <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
                                <main class="flex lg:py-12 xl:col-span-12">
                                    <div class="max-w-xl lg:max-w-3xl">
                                        <form action="#" class="" method="POST">
                                            @csrf
                                            <div class="grid grid-cols-2 lg:gap-8">
                                            @include('shared.input', [
                                                'label' => 'First Name',
                                                'name' => 'first_name',
                                                'type' => 'text',
                                                'placeholder' => 'Prénom',
                                                'required' => true,
                                                'autofocus' => true,
                                            ])
                                                @include('shared.input', [
                                                    'label' => 'Last Name',
                                                    'name' => 'last_name',
                                                    'type' => 'text',
                                                    'placeholder' => 'Nom',
                                                    'required' => true,
                                                ])
                                            </div>
                                            <div class="grid grid-cols-2 gap-4 lg:gap-8">
                                                @include('shared.input', [
                                                    'label' => 'Email',
                                                    'name' => 'email',
                                                    'type' => 'email',
                                                    'placeholder' => 'Email',
                                                    'required' => true,
                                                    'autofocus' => true,
                                                ])
                                                @include('shared.input', [
                                                    'label' => 'Phone',
                                                    'name' => 'phone',
                                                    'type' => 'text',
                                                    'placeholder' => 'Téléphone',
                                                    'required' => true,
                                                ])
                                            </div>
                                            <div>
                                                @include('shared.input', ['type' => 'textarea', 'placeholder' => 'Votre Message', 'name' => 'description'])
                                            </div>
                                            <div class="py-2 col-span-6 sm:flex sm:items-center sm:gap-4">
                                                <button
                                                    class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
                                                >
                                                    Nous contacter
                                                </button>

                                            </div>
                                        </form>
                                    </div>
                                </main>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
