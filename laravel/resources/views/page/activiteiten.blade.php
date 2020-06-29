@extends('template.mainTemplate')

@section('content')

    <div class="page-vereniging col pb-3 mt-3">
        <div class="row">
            <div class="col page-vereniging__maintitle">
                <h1 class="pt-3">{{ $page_content->title ?? 'Activiteiten' }}</h1>
            </div>
        </div>
        <div class="row mt-5">


            {!! $page_content->content_block_1 ?? 'Content block 1' !!}

            <div class="col-md-6 col-xs-6 text-right d-flex">
                <img class="w-75 rounded mx-auto mw-100 page-vereniging__image" src="{{ asset('images/placeholder.jpg') }}"/>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <div class="page-vereniging__info rounded-lg p-2 mt-3">{!! $page_content->content_block_2 ?? 'Content block 2' !!}</div>
            </div>
        </div>

    </div>

@endsection
