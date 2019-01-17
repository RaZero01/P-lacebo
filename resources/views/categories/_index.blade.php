<div class="my-2 mx-auto d-flex flex-row flex-wrap align-content-center align-items-center">
    @foreach($categories as $category)
    <div class="mx-auto py-2 px-auto category">
        <a href="{{ $category->route }}">
            <h1 class="text-center mb-1">{{ $category->name }}</h1>
            <img class="rounded img-fluid" src="{{ asset('storage/'.$category->image) }}">
        </a>
    </div>
    @endforeach
</div>