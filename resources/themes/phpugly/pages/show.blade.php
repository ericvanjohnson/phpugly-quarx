@extends('quarx-frontend::layout.master')

@section('seoDescription') {{ $page->seo_description }} @endsection
@section('seoKeywords') {{ $page->seo_keywords }} @endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-8 ">
                <h1>{!! $page->title !!}</h1>
                {!! $page->entry !!}
            </div>
        </div>
    </div>

@endsection

@section('quarx')
    @edit('pages', $page->id)
@endsection
