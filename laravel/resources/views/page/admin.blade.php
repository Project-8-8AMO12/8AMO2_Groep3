@extends('template.mainTemplate')

@section('content')
    <h1>Change Site Content</h1>
<div class="row">
    @foreach($pages as $page)
        <div class="col-sm-4">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $page->title }}</h5>
                    <p class="card-text">{{ $page->content_name }}</p>
                    <a href="/admin/{{ $page->id }}/edit" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
    @if(Auth::user()->user_role == "admin")
    <div class="row mt-2">
        <h1>User management</h1>
        <div class="col-sm-12">
            <a href="/register" class="btn btn-primary">Register a new user as a mod.</a>
            <a href="/manageusers" class="btn btn-primary">Manage users. Delete, Edit.</a>
        </div>
    </div>
    @endif
@endsection
