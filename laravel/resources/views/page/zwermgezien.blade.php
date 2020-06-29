@extends('template.mainTemplate')

@section('content')

    <div class="row mt-3" >
        <div class="col-12 page-zwermgezien">
            <div class="row">
                <div class="col mb-2">
                    <h1 class="primary-title mb-2">{{ $page_content->title ?? 'zwerm gezien' }}</h1>

                    <div class="row">
                        <div class="col-12">
                            {!! $page_content->content_block_1 ?? 'Content block 1' !!}
                        </div>

                        <div class="col-12">
                            {!! $page_content->content_block_2 ?? 'Content block 2' !!}
                        </div>

                        <div class="col-12">
                            {!! $page_content->content_block_3 ?? 'Content block 3' !!}
                        </div>

                        <div class="col-12">
                            {!! $page_content->content_block_4 ?? 'Content block 4' !!}
                        </div>

                        <div class="col-12 col-md-8 offset-0 offset-md-2 p-2">
                            <div class="page-zwermgezien__report-bee-swarm p-2">
                                {!! $page_content->content_block_5 ?? 'Content block 5' !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
