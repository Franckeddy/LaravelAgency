@extends('base')

@section('title', 'Se connecter')

@section('content-property')
    <form action="{{ route('login') }}" method="post">
        @include('shared.flash')
        @csrf
        <section class="bg-white">
            <div class="lg:grid lg:min-h-screen">
                <div class="sm:px-12 lg:col-span-7 block">
                        <h1 class="mt-6 text-2xl font-bold text-gray-900">
                            @yield('title')
                        </h1>
                        <form action="#" class="">
                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="email"
                                    class="block text-sm font-medium text-gray-700"
                                >
                                    Email
                                </label>

                                @include('shared.input', ['name' => 'email', 'label' => 'Email', 'type' => 'email'])
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label
                                    for="password"
                                    class="block text-sm font-medium text-gray-700"
                                >
                                    Mot de Passe
                                </label>

                                @include('shared.input', ['name' => 'password', 'label' => 'Mot de passe', 'type' => 'password'])
                            </div>
                            @error('email')
                            <div>{{ $message }}</div>
                            @enderror

                            <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                                <button type="submit"
                                        class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
                                >
                                    Se connecter
                                </button>
                            </div>
                        </form>
                </div>
            </div>
        </section>
@endsection
