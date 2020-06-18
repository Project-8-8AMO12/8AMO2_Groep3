@extends('template.mainTemplate')

@section('content')

    <div class="row mt-3" >
        <div class="col-12 col-md-9 page-home">
            <h1 class="primary-title">{{ $page_content->title ?? 'homepage' }}</h1>

            <div class="row">
                <div class="col-12 col-md-7 h-100">
                    <p>{{ $page_content->content_block_1 ?? 'Content block 1' }}</p>
                </div>

                <div class="col-12 col-md-5 h-100">
                    <img src="/images/imker_home.jpg" class="mh-100 mw-100">
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3 page-home page-home--sidebar">
            <h1 class="text-center">Sidebar goes here OwO</h1>
            <a class="twitter-timeline" href="https://twitter.com/GemeenteLeiden?ref_src=twsrc%5Etfw">Tweets by GemeenteLeiden</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>


@endsection
