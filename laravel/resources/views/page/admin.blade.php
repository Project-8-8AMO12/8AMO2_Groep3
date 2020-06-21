@extends('template.mainTemplate')

@section('content')
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
@endsection
