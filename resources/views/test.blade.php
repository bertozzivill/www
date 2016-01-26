@extends('master')

@section('content')
<ul>
	@foreach ($articles as $article)
		<li>{{$article}}</li>
	@endforeach
</ul>
@endsection