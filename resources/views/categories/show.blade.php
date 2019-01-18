@extends('layouts.app')

@section('pageTitle', $category->title)

@section('content')
@foreach ($category->collections as $collection)
<a href="{{ $collection->url }}">
    <h2>{{ $collection->title }}</h2>
</a>
@endforeach
@endsection