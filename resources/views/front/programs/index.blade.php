@extends('front.layouts.interna')

@section('content')
@include('front.assets.section-intro')

<div class="list-content" data-next-page="{{$contents->nextPageUrl()}}">

  @foreach($contents as $content)
  <?php $colsm = 4; $colmd = 4;?>
  @include('front.assets.list-content.content-list-video',$content)

  @endforeach


</div>



@endsection
