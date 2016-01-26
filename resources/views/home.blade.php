@extends('master')

@section('title')
Amelia Bertozzi-Villa
@endsection

@section('class')
index
@endsection

@section('content')
<section class="news">
	<h2>Recent</h2>
    <ul>
    	@foreach ($recents as $recent)

    	@if (is_array($recent))
    		<li class="publication"><a href="{{ $recent['url'] }}" target="_blank">
            <span class="description">{{ date('n.j.y', $recent['pubDate']) }}: {{ $recent['nickname'] }} paper published in <span class="journal-name">{{ $recent['journal'] }}</span></span>
            <span class="title">{{ $recent['title'] }}</span>
            <span class="author">{{ $recent['authors'] }}</span>
        	</a></li>

        @else
    		<li class="publication"><a href="{{ $recent->link }}" target="_blank">
            <span class="description">{{ date('n.j.y', strtotime($recent->pubDate)) }}: New blog post:</span>
            <span class="title">{{ $recent->title }}</span>
        	</a></li>

        @endif

    	@endforeach
    </ul>
</section>
<section class="about">
    <h2>About</h2>
    <p class="intro">
        Amelia is a disease modeler based out of Seattle, Washington. She currently works
        as a Post-Bachelor Fellow at the Institute for Health Metrics and Evaluation, and collaborates with
        the HIV and Ebola teams at the Institute for Disease Modeling.
    </p>
</section>
<section class="visualizations">
    <h2>Visualizations</h2>

    <div>
        <a style="background-image: url(/assets/img/idm_ebola.png)" href="http://institutefordiseasemodeling.github.io/EVD/" target="_blank"></a>
        <span class="caption">Ebola Cases, West Africa (Newer)</span>
    </div>
    <div>
        <a style="background-image: url(/assets/img/sierra_leone_ebola.png)" href="http://bertozzivill.github.io/ebola_sierra_leone/" target="_blank"></a>
        <span class="caption">Ebola Cases, Sierra Leone (Older)</span>
    </div>
    <div>
        <a style="background-image: url(/assets/img/disaster.png)" href="http://bertozzivill.github.io/disaster_taxonomy/" target="_blank"></a>
        <span class="caption">Taxonomy of Disaster</span>
    </div>
</section>
@endsection