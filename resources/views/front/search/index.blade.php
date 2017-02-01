@extends('front.layouts.interna')

@section('content')
<div class="seach-page">
  <div class="col-xs-12">
    <h1 class="">Resultados de Búsqueda: {{$query}}</h1>
    <div class="breadcumb">
    <a href="/">Home</a> <span class="b-separator">>></span>
    <a href="/search/?s={{$query}}">Resultados de Búsqueda: {{$query}}</a>
    </div>

  </div>

<div class="col-xs-12">
    <form id="search" class="" action="/search/{{$query}}">

        <button type="submit"><i class="material-icons">search</i></button>
        <input type="text" class="" id="search-input" value="{{$query}}" autocomplete="off">

    </form>
</div>

    </div>

@include('front.assets.list-content.list-contents')

@endsection
