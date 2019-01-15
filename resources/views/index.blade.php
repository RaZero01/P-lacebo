@extends('layouts.app')

@section('content')
@include('categories._index', ['categories' => $categories])
@endsection