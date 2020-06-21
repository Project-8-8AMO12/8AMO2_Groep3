@extends('template.mainTemplate')

@section('content')
    <div class="row">
        <form class="row" method="post" action="{{ url('/admin/'. $page->id .'/edit') }}">
            @csrf
        @for($i =1; $i < 10; $i++)
            <div class="col-sm-6 mt-4">
                <h2>Content block {{ $i }}</h2>
                <textarea name="{{ 'content_block_'.$i }}" rows="10" class="w-100">{{ $page['content_block_'.$i] }}</textarea>
            </div>
        @endfor
            <div class="col-sm-2 mt-5">
            <input type="submit" name="login"
                   class="btn btn-warning btn-lg btn--no-border-radius my-3 mt-4 w-100" value="Save"/>
            </div>
        </form>

    </div>
@endsection
