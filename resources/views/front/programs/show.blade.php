@extends('front.layouts.interna')

@section('content')
<?php $video=true; ?>
<?php

$JSON = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=statistics&id=$content->video_id&key=AIzaSyAHx3IOPRCJnzs4yVHoiE80VypdwPHOGhY");
$JSON_Data = json_decode($JSON);
$ytviews = $JSON_Data->items[0]->statistics->viewCount;

?>
@include('front.articles.assets.content',$content)

@endsection
