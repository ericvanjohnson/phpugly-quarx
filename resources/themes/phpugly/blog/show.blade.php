@extends('quarx-frontend::layout.master')

@section('seoDescription') {{ $blog->seo_description }} @endsection
@section('seoKeywords') {{ $blog->seo_keywords }} @endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-8 ">
                <h1>{!! $blog->title !!}</h1>
                <small><em>Published: {{ date('Y-M-d', strtotime($blog->published_at)) }}</em></small>
                {!! $blog->entry !!}
            </div>
        </div>
    </div>

@endsection

@section('quarx')
    @edit('blog', $blog->id)
@endsection
