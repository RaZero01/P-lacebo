<div class="my-2 mx-auto d-flex flex-row flex-wrap align-content-center align-items-center">
    @foreach($model as $item)
    <div class="mx-auto py-2 px-auto collection">
        <a href="{{ $item->url }}">
            <h2 class="text-center mb-1">{{ $item->title }}</h2>
            <img class="rounded img-fluid" src="{{ asset('storage/'.$item->image) }}">

            @if ($item instanceof App\Collection)
            <h4 class="text-center mt-1">
                @if (is_null($item->name))
                {{ $item->title }}
                @else
                Коллекция «{{ $item->name }}»
                @endif
            </h4>
            @endif
        </a>
    </div>
    @endforeach
</div>