@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @foreach($categories as $category)
                    <div class="media">
                        <div class="media-body">
                            <img src="images/categories/{{ $category->image }}">
                            <h3 class="mt-0">{{ $category->name }}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection