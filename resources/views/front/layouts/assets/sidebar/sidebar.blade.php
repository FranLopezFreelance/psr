
<!-- Go to www.addthis.com/dashboard to customize your tools
 <div class="addthis_inline_follow_toolbox"></div>

<div class="">
  <div class="fb-page" data-href="https://www.facebook.com/ProyectoSegundaRepublica/"
  data-tabs="timeline" data-small-header="false" data-adapt-container-width="true"
  data-hide-cover="false" data-show-facepile="true">
  <blockquote cite="https://www.facebook.com/ProyectoSegundaRepublica/"
  class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ProyectoSegundaRepublica/">
    Proyecto Segunda República</a></blockquote>
  </div>

</div>
-->

<div class="col-xs-6 col-md-12">
  <img class="sidebar" src="/img/test/sidebar.jpg" alt="">
</div>

<div class="col-xs-6 col-md-12 hidden-xs hidden-sm">
  <div class="fb-page" data-href="https://www.facebook.com/ProyectoSegundaRepublica/"
   data-small-header="false" data-adapt-container-width="true"
  data-hide-cover="false" data-show-facepile="true">
  <blockquote cite="https://www.facebook.com/ProyectoSegundaRepublica/"
  class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ProyectoSegundaRepublica/">
    Proyecto Segunda República</a></blockquote>
  </div>

</div>

<div class="col-xs-6 col-md-12">
  <img class="sidebar" src="/img/sidebar/contactateconpsr.jpg" alt="">
</div>
<div class="col-xs-6 col-md-12">
  <img class="sidebar" src="/img/test/follow.jpg" alt="">
</div>
<div class="clearfix"></div>
<div class="tag-cloud">
  <h3>TEMAS</h3>
  @foreach($tags as $tag)
  <a class="tag" href="{{$tag->getFullUrl()}}">{{$tag->name}}</a>
  @endforeach
</div>

<div class="articulos-recomendados">
  <h4>Artículos Recomendados</h4>

  @foreach($recomendados as $content)
  @include('front.layouts.assets.sidebar.articulo-recomendado',$content)
  @endforeach

</div>
