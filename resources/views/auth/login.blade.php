@extends('base')

@section('title', 'Se connecter')

@section('content-property')
    <h1>@yield('title')</h1>

    <form action="{{ route('login') }}" method="post">
        @include('shared.flash')
        @csrf
        <div>
            @include('shared.input', ['name' => 'email', 'label' => 'Email', 'type' => 'email'])
            @include('shared.input', ['name' => 'password', 'label' => 'Mot de passe', 'type' => 'password'])

            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Se connecter</button>
    </form>
@endsection
