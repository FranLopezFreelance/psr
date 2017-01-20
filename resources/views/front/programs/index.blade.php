@extends('front.layouts.interna')

@section('content')
@include('front.assets.section-intro')
<div class="programas-section">


<div class="row">
<div class="list-content" data-next-page="{{$contents->nextPageUrl()}}">

  @foreach($contents as $content)
  <?php $colsm = 4; $colmd = 4;?>
  @include('front.assets.list-content.content-list-video',$content)

  @endforeach

</div>
</div>
<div class="row"><div class="spinner-wrapper">@include('front.assets.material-loading')</div></div>
</div>


@endsection
