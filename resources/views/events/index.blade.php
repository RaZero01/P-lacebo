@extends('layouts.app')

@section('pageTitle', 'События')

@section('content')
<div class="mt-5 mb-3">
    @include('shared._layout-items', ['model' => $events])
</div>
@endsection