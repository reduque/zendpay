@extends('layouts.admin')

@section('css')
    <link href="css/slim.min.css" rel="stylesheet">
@endsection

@section('content')

<div class="row">
     <div class="col-lg-6">
        <h1 class="page-header">@lang('administracion.exams')</h1>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ route('administracion_home') }}"><i class="fa fa-dashboard"></i> @lang('administracion.inicio')</a></li>
            <li><a href="{{ route("exams.index") }}"><i class="fa fa-fw fa-pencil"></i> @lang('administracion.exams')</a></li>
            <li>@lang('administracion.crear')</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <p class="text-right"><a href="{{ route('exams.index') }}" class="btn btn-sm btn-primary"><i class="fa fa-fw fa-list"></i> @lang('administracion.volver_lista')</a></p>
    </div>
</div>

<form role="form" action="{{ route('exams.store') }}" method="POST">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label>Exam</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" maxlength="60" required autofocus>
                @if ($errors->has('name'))
                    <p class="help-block">{{ $errors->first('name') }}</p>
                @endif
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
                <label>Exam full name</label>
                <input type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" maxlength="150" required>
                @if ($errors->has('full_name'))
                    <p class="help-block">{{ $errors->first('full_name') }}</p>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group{{ $errors->has('quest_code') ? ' has-error' : '' }}">
                <label>Quest Code</label>
                <input type="text" class="form-control" name="quest_code" value="{{ old('quest_code') }}" maxlength="10" required>
                @if ($errors->has('quest_code'))
                    <p class="help-block">{{ $errors->first('quest_code') }}</p>
                @endif
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                <label>Price</label>
                <input type="nomber" step="0.01" class="form-control" name="price" value="{{ old('price') }}" required>
                @if ($errors->has('price'))
                    <p class="help-block">{{ $errors->first('price') }}</p>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" rows="5">{{ old('description') }}</textarea>
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
            <a href="{{ route('exams.index') }}" class="btn btn-primary"><i class="fa fa-fw fa-list"></i> @lang('administracion.volver_lista')</a>
        </div>
    </div>
</form>

@endsection

@section('javascript')
<script src="js/slim.jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
   $('.slim').slim({
      ratio: '293:310',
    minSize: {
      width: 293,
      height: 310
    },
    size: {
      width: 293,
      height: 310
    }
  });
 })
</script>
@endsection
