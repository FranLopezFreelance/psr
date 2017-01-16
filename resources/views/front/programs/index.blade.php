@extends('front.layouts.interna')

@section('content')
@include('front.assets.section-intro',array('title'=>'Economía','img'=>'/img/test/keiser.jpg','txt'=>'Keiser report – Mercados, finanzas, escándalos. Keiser report es una mirada a los escándalos detrás de los titulares financieros globales. Sean las colusiones entre Wall Street y el Congreso o la última oleada de delitos bancarios, las falsas estadísticas económicas gubernamentales o maquinaciones bursátiles, nada escapa al ojo de Max Keiser. Ex agente de valores, inventor de una tecnología virtual y cofundador de la bolsa de valores de Hollywood, Keiser ofrece el resumen de lo que pasa verdaderamente en la economía global, con la aportación de la copresentadora Stacy Herbert e invitados de varias partes del mundo.'))


<div class="videos-content" data-next-page="1">

  @foreach($contents as $content)
  <?php $colsm = 4; $colmd = 4;?>
  @include('front.assets.list-content.content-list-video',$content)

  @endforeach


</div>



@endsection
