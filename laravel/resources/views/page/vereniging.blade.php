@extends('template.mainTemplate')

@section('content')

<div class="page-vereniging col pb-3">
    <div class="row">
        <div class="col page-vereniging__maintitle">
            <h1 class="pt-3">{{ $page_content->title ?? 'De vereniging' }}</h1>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 col-xs-6 text-right ">
            <img class="w-75 rounded" src="{{ asset('images/placeholder.jpg') }}"/>
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
        <div class="col-md-6 col-xs-6 ">
            <img class="w-75 rounded" src="{{ asset('images/placeholder.jpg') }}"/>
        </div>
    </div>
    <div class="row mt-3">

        <div class="col">
            <h2 class="page-vereniging__subtitle">yes this is a title</h2>
            <p>{!! $page_content->content_block_3 ?? 'Content block 3' !!}</p>

        </div>

    </div>

    <div class="row">
        <div class="col">
            <div class="page-vereniging__info rounded-lg p-2 mt-3">De contributie voor leden bedraagt voor 2020 € 77,50 per jaar.

                Leden van de imkersvereniging Leiden en omstreken zijn tevens lid van de NBV. De bijenvolken van de leden zijn verzekerd. Leden ontvangen het maandblad ‘Bijen’ en ‘De Stertselaar’.
                De donatie voor belangstellenden bedraagt ten minste € 15,- per jaar.
                Donateurs ontvangen ‘De Stertselaar’.</div>
        </div>
    </div>
</div>

@endsection
