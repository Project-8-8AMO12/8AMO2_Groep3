@extends('template.mainTemplate')

@section('content')


    <div class="row mt-5">
        <div class="col-md-6 col-xs-6 text-right ">
            <img class="w-75 rounded" src="{{ asset('images/placeholder.jpg') }}"/>
        </div>
        <div class="col-md-6 col-xs-6">
            <h2>yes this title</h2>
            <h1>is made out of title</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

        </div>
    </div>
    <div class="row mt-3">

        <div class="col-md-6 col-xs-6 text-right">
            <h2>yes this title</h2>
            <h1>is made out of title</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

        </div>
        <div class="col-md-6 col-xs-6 ">
            <img class="w-75 rounded" src="{{ asset('images/placeholder.jpg') }}"/>
        </div>
    </div>
    <div class="row mt-3">

        <div class="col">
            <h2>yes this is a title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

        </div>

    </div>

    <div class="row">
        <div class="col">
            <div class="bg-warning rounded-lg p-2 mt-3">De contributie voor leden bedraagt voor 2020 € 77,50 per jaar.

                Leden van de imkersvereniging Leiden en omstreken zijn tevens lid van de NBV. De bijenvolken van de leden zijn verzekerd. Leden ontvangen het maandblad ‘Bijen’ en ‘De Stertselaar’.
                De donatie voor belangstellenden bedraagt ten minste € 15,- per jaar.
                Donateurs ontvangen ‘De Stertselaar’.</div>
        </div>
    </div>

@endsection
