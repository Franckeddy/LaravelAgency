@if(session('success'))
    <div role="succes" class="rounded border-s-4 border-green-500 bg-green-50 p-4">
        <strong class="block font-medium text-green-800"> Success </strong>
        <p class="mt-2 text-sm text-green-700">{{ session('success') }}</p>
    </div>
@endif

@if($errors->any())
    <div role="alert" class="rounded border-s-4 border-red-500 bg-red-50 p-4">
        <strong class="block font-medium text-red-800"> Something went wrong </strong>
        @foreach($errors->all() as $error)
            <p class="mt-2 text-sm text-red-700">{{ $error }}</p>
        @endforeach
    </div>
@endif
