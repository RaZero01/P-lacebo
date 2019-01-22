@extends('layouts.app')

@section('pageTitle', 'Партнёры')

@section('content')
<div class="mb-5 media">
    <div class="partners col">
        @include('shared._page-title', ['title' => 'Наши партнёры'])
        <div class="media-body mt-3 px-1">
            @include('shared._layout-items', ['model' => $partners])
        </div>
        <div class="media-body mt-5 px-5 partners-bottom">
            Компания P-lacebo всегда открыта для деловых предложений и плодотворного сотрудничества. Ждем ваши идеи на e-mail!
        </div>
    </div>
</div>
@endsection