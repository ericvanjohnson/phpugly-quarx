@extends('quarx-frontend::layout.master')

@section('seoDescription') {{ $blog->seo_description }} @endsection
@section('seoKeywords') {{ $blog->seo_keywords }} @endsection

@section('content')

    <h1>{!! $blog->title !!}</h1>
    <small><em>Published: {!! $blog->updated_at !!}</em></small>
    {!! $blog->entry !!}

@endsection

@section('quarx')
    @edit('blog', $blog->id)
@endsection
