@extends('layouts.app')

@section('pageTitle', 'Главная')

@section('content')
<div class="container">
    @include('shared._layout-items', ['model' => $categories])
</div>
@endsection