@extends('front.layouts.interna')

@section('content')
@include('front.assets.section-intro')

<div class="list-content" data-next-page="{{$contents->nextPageUrl()}}">

  @foreach($contents as $content)
  @include('front.articles.assets.content-of-list',$content)
  @endforeach

</div>
<div class="row">
  <div class="verMas col-xs-12">
    <a class="verMasContenido" onClick=loadContent()>Ver Más</a>
    <div class="spinner-wrapper">@include('front.assets.material-loading')</div>
  </div>
</div>
@endsection
