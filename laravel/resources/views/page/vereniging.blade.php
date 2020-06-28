@extends('template.mainTemplate')

@section('content')

<div class="page-vereniging col pb-3 mt-3">
    <div class="row">
        <div class="col page-vereniging__maintitle">
            <h1 class="pt-3">{{ $page_content->title ?? 'De vereniging' }}</h1>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 col-xs-6 text-right d-flex">
            <img class="w-75 rounded mx-auto mw-100 page-vereniging__image" src="{{ asset('images/placeholder.jpg') }}"/>
        </div>
        <div class="col-md-6 col-xs-6">
            <h2 class="page-vereniging__subtitle">yes this title</h2>
            <h1 class="page-vereniging__title">is made out of title</h1>
            <p>{!! $page_content->content_block_1 ?? 'Content block 1' !!}</p>

        </div>
    </div>
    <div class="row mt-3">

        <div class="col-md-6 col-xs-6 text-right">
            <h2 class="page-vereniging__subtitle">yes this title</h2>
            <h1 class="page-vereniging__title">is made out of title</h1>
            <p>{!! $page_content->content_block_2 ?? 'Content block 2' !!}</p>

        </div>
        <div class="col-md-6 col-xs-6 d-flex">
            <img class="w-75 rounded mx-auto mw-100 page-vereniging__image" src="{{ asset('images/placeholder.jpg') }}"/>
        </div>
    </div>
    <div class="row mt-3">

        <div class="col">
            <h2 class="page-vereniging__subtitle">yes this is a title</h2>
            <p>{!! $page_content->content_block_3 ?? 'Content block 3' !!}</p>

        </div>

    </div>


    <div class="row mt-5">
        <div class="col-md-6 col-xs-6 text-right d-flex">
            <img class="w-75 rounded mx-auto page-vereniging__image" src="{{ asset('images/placeholder.jpg') }}"/>
        </div>
        <div class="col-md-6 col-xs-6">
            <h2 class="page-vereniging__subtitle">yes this title</h2>
            <h1 class="page-vereniging__title">is made out of title</h1>
            <p>{!! $page_content->content_block_4 ?? 'Content block 4' !!}</p>

        </div>
    </div>

    <div class="row mt-3">

        <div class="col">
            <h2 class="page-vereniging__subtitle">yes this is a title</h2>
            <p>{!! $page_content->content_block_5 ?? 'Content block 5' !!}</p>

        </div>

    </div>

    <div class="row mt-5">
        <div class="col-md-6 col-xs-6 text-right d-flex">
            <img class="w-75 rounded mx-auto page-vereniging__image" src="{{ asset('images/placeholder.jpg') }}"/>
        </div>
        <div class="col-md-6 col-xs-6">
            <h2 class="page-vereniging__subtitle">yes this title</h2>
            <h1 class="page-vereniging__title">is made out of title</h1>
            <p>{!! $page_content->content_block_6 ?? 'Content block 6' !!}</p>

        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="page-vereniging__info rounded-lg p-2 mt-3">{!! $page_content->content_block_7 ?? 'Content block 7' !!}</div>
        </div>
    </div>

</div>

@endsection
