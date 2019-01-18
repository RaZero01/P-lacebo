@extends('layouts.app')

@section('pageTitle', $category->title)

@section('content')
@include('collections._index', ['collections' => $category->collections])
@endsection