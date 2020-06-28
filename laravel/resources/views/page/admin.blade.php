@extends('template.mainTemplate')

@section('content')
    <h1>Change Site Content</h1>
    <div class="row mt-2 mb-2">
        @foreach($pages as $page)
            <div class="col-sm-4">
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $page->title }}</h5>
                        <p class="card-text">{{ $page->content_name }}</p>
                        <a href="/admin/{{ $page->id }}/edit" class="btn btn-primary">Pas content aan</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @if(Auth::user()->user_role == "admin")
        <div class="row mt-4">
            <div class="col-sm-6">
                <h1>User options</h1>
                <a href="/register" class="btn btn-primary">Register a new user as a mod.</a>
                <a href="/manageusers" class="btn btn-primary">Manage users. Delete, Edit.</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-6">
                <h1>Nieuwsbrief toevoegen</h1>
                <form class="form" method="POST" action="{{ url('/admin/nieuwsbrief') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nieuwsbrief Naam</label>
                        <input type="text" name="name" id="name" placeholder="Name" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label>Het bestand</label>
                        <input type="file" name="file" class="form-control dark-color-3 p-1">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Toevoegen</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <h1>Nieuwsbrief versturen.</h1>
                    @if($nieuwsbrief->sent == 0)
                        <p>De meest recent nieuwsbrief is nog niet verzonden.</p>
                        <a href="/admin/nieuwsbrief" class="btn btn-primary">Verstuur de meeste recente nieuwsbrief!</a>
                    @else
                        <p>De meest recent nieuwsbrief is al verzonden.</p>
                    @endif
            </div>
        </div>
    @endif
@endsection
