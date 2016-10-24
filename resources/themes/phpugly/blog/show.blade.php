@extends('quarx-frontend::layout.master')

@section('seoDescription') {{ $blog->seo_description }} @endsection
@section('seoKeywords') {{ $blog->seo_keywords }} @endsection

@section('content')

    <h1>{!! $blog->title !!}</h1>
    <small><em>Published: {{ date('Y-M-d', strtotime($blog->published_at)) }}</em></small>
    {!! $blog->entry !!}

@endsection

@section('quarx')
    @edit('blog', $blog->id)
@endsection
