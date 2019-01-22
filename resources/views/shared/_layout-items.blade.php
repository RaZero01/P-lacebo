<div class="my-2 mx-5 px-5 d-flex justify-content-around flex-column flex-md-row flex-wrap align-items-md-baseline align-items-center">
    @foreach($model as $item)
    <div class="mx-3 pt-2 item-enlarge-flex text-center flex-md-grow-0 flex-grow-1">
        @if (!$item instanceof App\Event)
        <a href="{{ $item->url }}">
            @endif
            @if ($item instanceof App\Person)
            <h2>{{ $item->name }}</h2>
            @elseif ($item instanceof App\Event)
            {{--Empty top header for image --}}
            @else
            <h2>{{ $item->title }}</h2>
            @endif

            <img class="rounded img-fluid" src="{{ asset($item->image) }}">

            @if ($item instanceof App\Collection)
            <h4>
                @if ($item->name == '')
                {{ $item->title }}
                @else
                Коллекция «{{ $item->name }}»
                @endif
            </h4>
            @elseif ($item instanceof App\Person)
            <h4>
                {{ $item->position }}
            </h4>
            @elseif ($item instanceof App\Partner)
            <h4>
                {{ $item->name }}
            </h4>
            @elseif ($item instanceof App\Event)
            <h4>
                {{ $item->title }}
            </h4>
            @endif
        </a>
    </div>
    @endforeach
</div>