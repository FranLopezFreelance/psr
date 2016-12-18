@extends('layouts.app')

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
                <div class="panel-heading"><h3>Artículos</h3>
                </div>
                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
