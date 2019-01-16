@extends('layouts.app')

@section('content')
<div class="container">
    @include('categories._index', ['categories' => $categories])
</div>
@endsection