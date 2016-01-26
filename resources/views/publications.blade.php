@extends('master')

@section('title')
Publications
@endsection

@section('class')
pubs
@endsection

@section('content')
<section class="pubs">
    <ul>
    	@foreach ($publications as $publication)
    		<li class="publication"><a href="{{$publication['url']}}" target="_blank">
            <span class="description">{{date('n.j.y', $publication['pubDate'])}}: <span class="journal-name">{{$publication['journal']}}</span></span>
            <span class="title">{{$publication['title']}}</span>
            <span class="author">{{$publication['authors']}}</span>
        </a></li>
    	@endforeach
    </ul>
</section>
@endsection