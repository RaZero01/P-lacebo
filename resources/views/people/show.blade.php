@extends('layouts.app')

@section('pageTitle', $person->name. ' - ' . $person->position)

@section('content')
<div class="mx-2 mx-md-5 media">
    <div class="person col">
        <div class="text-center media-heading">
            <span class="my-3 title text-center">{{ $person->title }}</span>
        </div>
        <div class="row media-body justify-content-center justify-content-md-left mt-3 px-1">
            <div class="col-md col-lg-4 col-sm-5 col-6 col-md-5 col-xl-3 avatar">
                {!! $person->external_url != Request::url() ? "<a class=\"img1\" href=\"" . $person->external_url . "\">" : '' !!}
                    <img src="{{ asset($person->image) }}" class="rounded img-fluid">
                    {!! $person->external_url != Request::url() ? "</a>" : '' !!}
            </div>
            <div class="col-md align-self-center">
                @if ($person->email != '' || $person->phone != '')
                <div class="row-md row-xl-4 row-lg-3 text-center text-center-sm align-self-center text-nowrap mt-3 mt-md-0 tel-mail-info">
                    @if ($person->phone != '')
                    <span class="d-block">Телефон: <a href="tel:{{  preg_replace("/[^0-9]/", "", $person->phone) }}">{{ $person->phone }}</a></span>
                    @endif
                    @if ($person->email != '')
                    <span class="d-block">Е-mail: <a href="mailto:{{ $person->email }}" class="mail-link">{{ $person->email }}</a></span>
                    @endif
                </div>
                @endif
                @if ($person->instagram != '' || $person->facebook != '')
                <div class="row-md row-xl-4 row-lg-3 text-center text-center-sm align-self-center text-nowrap">
                    @if ($person->instagram != '')
                    <span class="d-block social mt-2">
                        <a href="{{ $person->instagram }}" class="social d-block"><i class="fab fa-instagram"></i> <i class="social-name">Instagram</i></a>
                    </span>
                    @endif
                    @if ($person->facebook != '')
                    <span class="d-block social mt-2">
                        <a href="{{ $person->facebook }}" class="social d-block"><i class="fab fa-facebook"></i> <i class="social-name">Facebook</i></a>
                    </span>
                    @endif
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