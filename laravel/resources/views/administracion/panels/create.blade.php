@extends('layouts.admin')

@section('css')
    <link href="css/slim.min.css" rel="stylesheet">
@endsection

@section('content')

<div class="row">
     <div class="col-lg-6">
        <h1 class="page-header">@lang('administracion.panels') - {{ $category->category }}</h1>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ route('administracion_home') }}"><i class="fa fa-dashboard"></i> @lang('administracion.inicio')</a></li>
            <li><a href="{{ route('categories.index') }}"><i class="fa fa-fw fa-pencil"></i> @lang('administracion.categories')</a></li>
            <li><a href="{{ route('categories.edit', codifica($category->id) ) }}"><i class="fa fa-fw fa-pencil"></i> {{ $category->category }}</a></li>
            <li><a href="{{ route("panels.index") }}"><i class="fa fa-fw fa-pencil"></i> @lang('administracion.panels')</a></li>
            <li>@lang('administracion.crear')</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <p class="text-right"><a href="{{ route('panels.index') }}" class="btn btn-sm btn-primary"><i class="fa fa-fw fa-list"></i> @lang('administracion.volver_lista')</a></p>
    </div>
</div>

<form role="form" action="{{ route('panels.store') }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="category_id" value="{{ session('category_id') }}">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" maxlength="100" required autofocus>
                @if ($errors->has('name'))
                    <p class="help-block">{{ $errors->first('name') }}</p>
                @endif
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                <label>Price</label>
                <input type="nomber" step="0.01" class="form-control" name="price" value="{{ old('price') }}" required>
                @if ($errors->has('price'))
                    <p class="help-block">{{ $errors->first('price') }}</p>
                @endif
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label>Code</label>
                <input type="text" class="form-control" name="code" value="{{ old('code') }}" maxlength="10">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="5" name="description">{{ old('description') }}</textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Preparation</label>
                <input type="text" class="form-control" name="preparation" value="{{ old('preparation') }}" maxlength="150">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-check"></i> @lang('administracion.guardar')</button>  
            <a href="{{ route('panels.index') }}" class="btn btn-primary"><i class="fa fa-fw fa-list"></i> @lang('administracion.volver_lista')</a>
        </div>
    </div>
</form>

@endsection

@section('javascript')
<script src="js/slim.jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
   $('.slim').slim({
      ratio: '1024:512',
    minSize: {
      width: 1024,
      height: 512
    },
    size: {
      width: 1024,
      height: 512
    }
  });
 })
</script>
@endsection
