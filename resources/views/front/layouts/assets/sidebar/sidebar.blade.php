<!--<ul class="list-unstyled">
  <li>ARTICULOS NACIONALES</li>
  <li>ARTICULOS NACIONALES</li>
  <li>ARTICULOS NACIONALES</li>
  <li>ARTICULOS NACIONALES</li>
  <li>ARTICULOS NACIONALES</li>
  <li>ARTICULOS NACIONALES</li>
  <li>ARTICULOS NACIONALES</li>
  <li>ARTICULOS NACIONALES</li>
  <li>ARTICULOS NACIONALES</li>
</ul>-->
<div class="">
  <div class="fb-page" data-href="https://www.facebook.com/ProyectoSegundaRepublica/"
  data-tabs="timeline" data-small-header="false" data-adapt-container-width="true"
  data-hide-cover="false" data-show-facepile="true">
  <blockquote cite="https://www.facebook.com/ProyectoSegundaRepublica/"
  class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ProyectoSegundaRepublica/">
    Proyecto Segunda República</a></blockquote>
  </div>

</div>

<div class="tag-cloud">
  <h3>TEMAS</h3>
  <a class="tag">Moneda soberana</a>
  <a class="tag">Macri gato</a>
  <a class="tag">Mercosur</a>
  <a class="tag">Energía</a>
  <a class="tag">Peronismo</a>
  <a class="tag">Religión</a>
  <a class="tag">Medio Ambiente</a>
  <a class="tag">Conspiración</a>
  <a class="tag">Esoterismo</a>
  <a class="tag">Plan quinqunal</a>
  <a class="tag">Economía</a>
  <a class="tag">Política</a>
  <a class="tag">Nueva República</a>
</div>

<div class="articulos-recomendados">
  <h4>Artículos Recomendados</h4>

  @foreach($recomendados as $content)
  @include('front.layouts.assets.sidebar.articulo-recomendado',$content)
  @endforeach

</div>


<div class="">
  <img src="{{$path}}/img/test/sputnik.jpg" alt="">

</div>
