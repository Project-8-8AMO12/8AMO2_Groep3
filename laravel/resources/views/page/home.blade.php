@extends('template.mainTemplate')

@section('content')

    <div class="row mt-3" >
        <div class="col-12 col-md-9 page-home">
            <div class="row">
                <div class="col">
                    <h1 class="primary-title">{{ $page_content->title ?? 'homepage' }}</h1>

                    <div class="row">
                        <div class="col-12 col-md-7 mh-100">
                            {!! $page_content->content_block_1 ?? 'Content block 1' !!}
                        </div>

                        <div class="col-12 col-md-5 mh-100 d-flex">
                            <img src="/images/imker_home.jpg" class="mh-100 mw-100 my-auto rounded">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            {!! $page_content->content_block_2 ?? 'Content block 2' !!}
                        </div>

                        <div class="col-12 col-md-6 page-home--about">
                            {!! $page_content->content_block_3 ?? 'Content block 3' !!}
                        </div>

                        <div class="col-12 col-md-6 page-home--about">
                            {!! $page_content->content_block_4 ?? 'Content block 4' !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row p-2">
                <div class="col page-home--email py-5">
                    <h2 class="text-center mb-0">{{ $newsletter_content->title ?? 'title - subscribeToNewsletter' }}</h2>
                    <div class="text-center">{!! $newsletter_content->content_block_1 ?? 'Content block 1 - subscribeToNewsletter' !!}</div>
                    <form class="row page-home--email-form mx-auto" method="POST" action="{{ url('nieuwsbrief') }}">
                        {{ csrf_field() }}
                        <input class="col text-center rounded-left border-top-0 border-bottom-0" placeholder="email" name="email" type="email" />
                        <input class="col-auto page-home--email-button rounded-right" type="submit" value="Aboneer"/>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3 mt-4 mt-md-0 page-home page-home--sidebar">
            <div class="page-home--sidebar-cms my-2">
                {!! $sidebar_content->content_block_1 ?? 'Content block 1 - Sidebar' !!}
            </div>

            <div class="h-100 mb-2">
                <a class="twitter-timeline" href="https://twitter.com/GemeenteLeiden?ref_src=twsrc%5Etfw">Tweets by GemeenteLeiden</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>


@endsection
