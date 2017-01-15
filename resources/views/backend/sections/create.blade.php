@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h4><a href="/backend/sections">Secciones</a> / Neva Sección</h4></div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="/backend/sections">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">Nombre</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control title" name="name" value="{{ old('name') }}" required autofocus>

                              @if ($errors->has('name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
                          <label for="level" class="col-md-4 control-label">Nivel</label>
                          <div class="col-md-6">
                              <select class="form-control level" name="level" required>
                                <option value="0">Elegir...</option>
                                <option value="1">Principal</option>
                                <option value="2">Sub Sección</option>
                              </select>

                              @if ($errors->has('level'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('level') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('section_id') ? ' has-error' : '' }} principal">
                          <label for="section_id" class="col-md-4 control-label">Sección Principal</label>
                          <div class="col-md-6">
                              <select class="form-control" name="section_id" required>
                                <option value="0">Elegir...</option>
                                  @forelse($sections as $section)
                                    @if($section->level == 1)
                                      <option value="{{ $section->id }}">{{ $section->name }}</option>
                                    @endif
                                  @empty
                                    <option value="0">No hay secciones</option>
                                  @endforelse
                              </select>

                              @if ($errors->has('section_id'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('section_id') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                          <label for="url" class="col-md-4 control-label">URL</label>

                          <div class="col-md-6">
                              <input id="url" type="text" class="form-control url" name="url" value="{{ old('url') }}" required>

                              @if ($errors->has('url'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('url') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                          <label for="description" class="col-md-4 control-label">Descripción</label>

                          <div class="col-md-6">
                              <textarea id="description" class="form-control" name="description" required/>{{ old('description') }}</textarea>

                              @if ($errors->has('description'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('description') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  Crear
                              </button>
                          </div>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
