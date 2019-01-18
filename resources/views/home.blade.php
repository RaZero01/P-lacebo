@extends('layouts.app')

@section('pageTitle', 'Главная')

@section('content')
<div class="container">
    @include('categories._index')
</div>
@endsection