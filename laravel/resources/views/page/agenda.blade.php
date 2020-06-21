@extends('template.mainTemplate')

@section('content')

    <div class="row mt-3" >
        <div class="col-12 page-agenda">
            <div class="row">
                <div class="col">
                    <h1 class="primary-title mb-2">{{ $page_content->title ?? 'agenda' }}</h1>

                    <div class="row">
                        <div class="col-12">
                            {!! $page_content->content_block_1 ?? 'Content block 1' !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6 page-agenda--events">
                            {!! $page_content->content_block_2 ?? 'Content block 2' !!}
                        </div>

                        <div class="col-12 col-md-6 page-agenda--events">
                            {!! $page_content->content_block_3 ?? 'Content block 3' !!}
                        </div>

                        <div class="col-12">
                            {!! $page_content->content_block_4 ?? 'Content block 4' !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
