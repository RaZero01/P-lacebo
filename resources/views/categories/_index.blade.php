<section class="content" style="margin-top: 7vw; text-align: center">
    <div class="flex-block">

        @foreach($categories as $category)
        <div class="block">
            <div class="names-top">
                <span>{{ $category->name }}</span></a>
            </div>
            <div class="flex-parts">
                <img class="img1" src="{{ asset('storage/'.$category->image) }}">
            </div>
        </div>
        @endforeach
    </div>
</section>