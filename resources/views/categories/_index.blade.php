<section class="d-flex flex-row flex-wrap align-content-center align-items-center">
    @foreach($categories as $category)
    <div class="mx-auto py-2 px-auto category">
        <h1 class="text-center mb-1">{{ $category->name }}</h1>
        <img class="rounded img-fluid" src="{{ asset('storage/'.$category->image) }}">
    </div>
    @endforeach
</section>