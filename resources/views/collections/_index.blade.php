<div class="my-2 mx-auto d-flex flex-row flex-wrap align-content-center align-items-center">
    @foreach($collections as $collection)
    <div class="mx-auto py-2 px-auto collection">
        <a href="{{ $collection->url }}">
            <h2 class="text-center mb-1">{{ $collection->title }}</h2>
            <img class="rounded img-fluid" src="{{ asset('storage/'.$collection->image) }}">
            <h4 class="text-center mt -1">Коллекция «{{ $collection->name }}»</h4>
        </a>
    </div>
    @endforeach
</div>