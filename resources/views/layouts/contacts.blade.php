@extends('layouts.app')

@section('pageTitle', 'Контакты')

@section('content')
<div class="media mb-4">
    <div class="contacts col">
        @include('shared._page-title', ['title' => 'Контакты'])


        @foreach ($people as $person)
        <div class="row media-body justify-content-left mx-0 mx-md-3 px-0 px-sm-2 px-md-4 contact-item">
            <div class="col-sm mt-3 mt-lg-5 mb-sm-3 mb-lg-5 contact-main">
                <span class="d-block">{{ $person->contacts_label }}</span>
                <span class="d-block">{{ $person->position }}</span>
                <span class="d-block">{{ $person->name }}</span>
                @if ($person->email != '' || $person->phone != '')
                @include('shared._contact', ['type' => 'phone', 'contact' => $person->phone])
                @include('shared._contact', ['type' => 'email', 'contact' => $person->email])
                @endif
            </div>

            @if ($person->instagram != '' || $person->facebook != '')
            <div class="col-sm mb-3 mb-sm-0  justify-content-left align-self-center text-center text-nowrap contact-social">
                @include('shared._social', ['social_url' => $person->instagram, 'social_type' => 'instagram'])
                @include('shared._social', ['social_url' => $person->facebook, 'social_type' => 'facebook'])
            </div>
            @endif
        </div>
        @endforeach
    </div>
</div>
@endsection