@extends('layouts.app')

@section('pageTitle', $category->title)

@section('content')
@include('shared._layout-items', ['model' => $category->collections])
@endsection