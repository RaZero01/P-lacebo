@extends('layouts.app')

@section('pageTitle', $person->name. ' - ' . $person->position)

@section('content')
<div class="mx-2 mx-md-5 mb-3 media">
    <div class="person col">
        @include('shared._page-title', ['title' => $person->title])

        <div class="row media-body justify-content-center justify-content-md-left mt-3 px-1">
            <div class="col-md col-lg-4 col-sm-5 col-6 col-md-5 col-xl-3 avatar">
                {!! $person->external_url != '' ? "<a href=\"" . $person->external_url . "\">" : '' !!}
                    <img src="{{ asset($person->image) }}" class="rounded img-fluid">
                    {!! $person->external_url != '' ? "</a>" : '' !!}
            </div>

            <div class="col-md align-self-center">
                @if ($person->email != '' || $person->phone != '')
                <div class="row-md row-xl-4 row-lg-3 text-center text-center-sm align-self-center text-nowrap mt-3 mt-md-0 tel-mail-info">
                    @include('shared._contact', ['type' => 'phone', 'contact' => $person->phone])
                    @include('shared._contact', ['type' => 'email', 'contact' => $person->email])
                </div>
                @endif

                @if ($person->instagram != '' || $person->facebook != '')
                <div class="row-md row-xl-4 row-lg-3 text-center text-center-sm align-self-center text-nowrap">
                    @include('shared._social', ['social_url' => $person->instagram, 'social_type' => 'instagram'])
                    @include('shared._social', ['social_url' => $person->facebook, 'social_type' => 'facebook'])
                </div>
                @endif
            </div>
        </div>

        <div class="media-body mt-md-5 mt-2 about">
            {!! $person->about_html !!}
        </div>
    </div>
</div>
@endsection