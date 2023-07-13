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
                            <h1 class="text-xl font-bold sm:text-2xl text-black">
                                {{ $property->title }}
                            </h1>
{{--                            <p class="text-sm">Highest Rated Product</p>--}}
{{--                            <div class="-ms-0.5 flex">--}}
{{--                                <svg--}}
{{--                                    class="h-5 w-5 text-yellow-400"--}}
{{--                                    xmlns="http://www.w3.org/2000/svg"--}}
{{--                                    viewBox="0 0 20 20"--}}
{{--                                    fill="currentColor"--}}
{{--                                >--}}
{{--                                    <path--}}
{{--                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"--}}
{{--                                    />--}}
{{--                                </svg>--}}

{{--                                <svg--}}
{{--                                    class="h-5 w-5 text-yellow-400"--}}
{{--                                    xmlns="http://www.w3.org/2000/svg"--}}
{{--                                    viewBox="0 0 20 20"--}}
{{--                                    fill="currentColor"--}}
{{--                                >--}}
{{--                                    <path--}}
{{--                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"--}}
{{--                                    />--}}
{{--                                </svg>--}}

{{--                                <svg--}}
{{--                                    class="h-5 w-5 text-yellow-400"--}}
{{--                                    xmlns="http://www.w3.org/2000/svg"--}}
{{--                                    viewBox="0 0 20 20"--}}
{{--                                    fill="currentColor"--}}
{{--                                >--}}
{{--                                    <path--}}
{{--                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"--}}
{{--                                    />--}}
{{--                                </svg>--}}

{{--                                <svg--}}
{{--                                    class="h-5 w-5 text-yellow-400"--}}
{{--                                    xmlns="http://www.w3.org/2000/svg"--}}
{{--                                    viewBox="0 0 20 20"--}}
{{--                                    fill="currentColor"--}}
{{--                                >--}}
{{--                                    <path--}}
{{--                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"--}}
{{--                                    />--}}
{{--                                </svg>--}}

{{--                                <svg--}}
{{--                                    class="h-5 w-5 text-gray-200"--}}
{{--                                    xmlns="http://www.w3.org/2000/svg"--}}
{{--                                    viewBox="0 0 20 20"--}}
{{--                                    fill="currentColor"--}}
{{--                                >--}}
{{--                                    <path--}}
{{--                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"--}}
{{--                                    />--}}
{{--                                </svg>--}}
{{--                            </div>--}}
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
                                    >{{ $property->surface }} m2
                </span>
                                </label>
                        </fieldset>

                        <fieldset class="mt-4">
                            <legend class="mb-1 text-sm font-medium text-black">Adresse</legend>

                            <div class="flex flex-wrap gap-1">
                                <label for="size_xs">
                                    <span
                                        class="inline-flex items-center justify-center text-xs font-medium"
                                    >{{ $property->address }}, </span>
                                </label>

                                    <span
                                        class="inline-flex items-center justify-center text-xs font-medium"
                                    >{{ $property->city }}
                </span>

                                    <span
                                        class="group inline-flex items-center justify-center text-xs font-medium"
                                    >{{ $property->postal_code }}
                </span>
                            </div>
                        </fieldset>

{{--                        <div class="mt-8 flex gap-4">--}}
{{--                            <div>--}}
{{--                                <label for="quantity" class="sr-only">Qty</label>--}}

{{--                                <input--}}
{{--                                    type="number"--}}
{{--                                    id="quantity"--}}
{{--                                    min="1"--}}
{{--                                    value="1"--}}
{{--                                    class="w-12 rounded border-gray-200 py-3 text-center text-xs [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"--}}
{{--                                />--}}
{{--                            </div>--}}

{{--                            <button--}}
{{--                                type="submit"--}}
{{--                                class="block rounded bg-green-600 px-5 py-3 text-xs font-medium text-white hover:bg-green-500"--}}
{{--                            >--}}
{{--                                Add to Cart--}}
{{--                            </button>--}}
{{--                        </div>--}}
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
