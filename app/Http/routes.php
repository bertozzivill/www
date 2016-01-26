<?php

use Symfony\Component\Yaml\Yaml;
use Vinelab\Rss\Rss;

$pubs = Yaml::parse(file_get_contents('../resources/pubs.yaml'));

$blog = iterator_to_array((new Rss())->feed("https://medium.com/feed/@abertozz")->articles());

$all_news =array_merge($pubs, $blog);
usort($all_news, function ($a, $b) {
	$a = (object)$a;
	$b = (object)$b;

	$a = $a->pubDate;
	$b = $b->pubDate;

	if (!is_int($a)) $a=strtotime($a);
	if (!is_int($b)) $b=strtotime($b);

	return $b-$a;
});

$recents = array_slice($all_news, 0, 3);

$app->get('/', function () use($recents){
    return view('home', ['recents'=>$recents]);
});

$app->get('/publications', function () use($pubs) {
	return view('publications', ['publications'=>$pubs]);
});

