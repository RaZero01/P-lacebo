@extends('layouts.app')

@section('pageTitle', 'О компании')

@section('content')
@include('shared._layout-items', ['model' => $people])
@endsection