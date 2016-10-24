@extends('quarx-frontend::layout.master')

@section('content')

    <div class="container">
        <h1>Shows</h1>

    <div class="row">
        <div class="col-lg-8">
            @foreach($blogs as $blog)
                @if ($loop->iteration < 4)
                    <p>
                        <h2><a href="{!! URL::to('blog/'.$blog->url) !!}"><p>{!! $blog->title !!}</p></a></h2>
                    <small><em>Published: {{ date('Y-M-d', strtotime($blog->published_at)) }}</em></small>
                    {!! str_limit($blog->entry,1500) !!}
                    <a href="{!! URL::to('blog/'.$blog->url) !!}"><p>...more</p></a>
                    </ul>
                    </p>
                    <hr>
                @else
                    @if ($loop->iteration == 4)<h2>Older Shows</h2>@endif
                    <p><a href="{!! URL::to('blog/'.$blog->url) !!}">{!! $blog->title !!}</a> -
                        <small><em> {{ date('Y/m/d', strtotime($blog->published_at)) }}</em></small>
                    </p>
                @endif
            @endforeach

            {!! $blogs !!}
        </div>

        <div class="col-md-4">
            <h3>Tags</h3>
            @foreach($tags as $tag)
                <a href="{{ url('blog/tags/'.$tag) }}" class="btn btn-default">{{ $tag }}</a>
            @endforeach
        </div>
    </div>
    </div>

    <div class="padding">
        <p>With More to Come</p>
    </div>

@endsection

@section('quarx')
    @edit('blog')
@endsection