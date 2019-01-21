@extends('layouts.app')

@section('pageTitle', 'Главная')

@section('content')
@include('shared._layout-items', ['model' => $categories])
@endsection