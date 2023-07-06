@extends('admin.admin')

@section('title', $option->exists ? 'Modifier une option' : 'Créer une option')

@section('content')

    <section class="bg-gray-100">
        <div class="mx-auto max-w-screen-xl px-4 py-4 sm:px-6">
                <div class="rounded-lg bg-white p-8 shadow-lg">
                    <form action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store', $option) }}" method="POST" class="space-y-4">
                        @csrf
                        @method($option->exists ? 'PUT' : 'POST')

                        <div class="grid grid-cols-1 gap-4 lg:grid-cols-[1fr_120px] lg:gap-8">
                            @include('shared.input', ['class' => 'rounded-lg', 'label' => 'Nom', 'placeholder' => 'Nom de l\'option', 'name' => 'name', 'value' => $option->name])
                        </div>

                        <div class="mt-4">
                            <button class="w-full px-4 py-2 text-white font-medium bg-indigo-600 hover:bg-indigo-500 active:bg-indigo-600 rounded-lg duration-150">
                                @if($option->exists)
                                    Modifier
                                @else
                                    Créer
                                @endif
                            </button>
                        </div>
                    </form>
                </div>
            </div>
    </section>

@endsection
