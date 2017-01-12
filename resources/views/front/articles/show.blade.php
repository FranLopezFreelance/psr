@extends('front.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Secciones</h3>
                </div>

                <div class="panel-body">
                      @forelse($sections as $section)
                        {{ $section->getTree(1) }}
                      @empty
                      @endforelse
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $article->section->mother->name }}/{{ $article->section->name }}
                  @if($article->dest == 'on')
                    <span class="label label-warning">Destacado</span>
                  @endif
                  <h3>{{ $article->title }}</h3>
                </div>
                <div class="panel-body">
                    {{ $article->text }}
                    <hr />
                    <p><b>Fecha:</b> {{ $article->date() }}</p>
                    <p><b>Autor:</b> {{ $article->author->name }}</p>
                    <p><b>Tags:</b> {{ $article->getTags() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
