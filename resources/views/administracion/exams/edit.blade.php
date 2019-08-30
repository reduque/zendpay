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
            <li><a href="{{ route('exams.index') }}"><i class="fa fa-fw fa-pencil"></i> @lang('administracion.exams')</a></li>
            <li>Editar</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-10">
    @if($notificacion=Session::get('notificacion'))
        <div class="alert alert-success">{{ $notificacion }}</div>
    @endif
    @if($notificacion_error=Session::get('notificacion_error'))
        <div class="alert alert-danger">{{ $notificacion_error }}</div>
    @endif
    </div>
    <div class="col-lg-2">
        <p class="text-right"><a href="{{ route('exams.index') }}" class="btn btn-sm btn-primary"><i class="fa fa-fw fa-list"></i> @lang('administracion.volver_lista')</a></p>
    </div>
</div>
<form role="form" action="{{ route('exams.update', codifica($exam->id)) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label>Exam</label>
                <input type="text" class="form-control" name="name" value="{{ old('name', $exam->name) }}" maxlength="60" required autofocus>
                @if ($errors->has('name'))
                    <p class="help-block">{{ $errors->first('name') }}</p>
                @endif
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
                <label>Exam full name</label>
                <input type="text" class="form-control" name="full_name" value="{{ old('full_name', $exam->full_name) }}" maxlength="150" required>
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
                <input type="text" class="form-control" name="quest_code" value="{{ old('quest_code', $exam->quest_code) }}" maxlength="10" required>
                @if ($errors->has('quest_code'))
                    <p class="help-block">{{ $errors->first('quest_code') }}</p>
                @endif
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                <label>Price</label>
                <input type="nomber" step="0.01" class="form-control" name="price" value="{{ old('price', $exam->price) }}" required>
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
                <textarea class="form-control" name="description" rows="5">{{ old('description', $exam->description) }}</textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Preparation</label>
                <input type="text" class="form-control" name="preparation" value="{{ old('preparation',$exam->preparation) }}" maxlength="150">
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6">
            <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-check"></i> @lang('administracion.guardar')</button>  
            <a href="{{ route('exams.index') }}" class="btn btn-primary"><i class="fa fa-fw fa-list"></i> @lang('administracion.volver_lista')</a> 
            <a href="{{ route('exams.create') }}" class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i> @lang('administracion.nuevo')</a> 
            <a href="{{ route('exams_eliminar', codifica($exam->id) ) }}" class="btn btn-danger"><i class="fa fa-fw fa-ban"></i> @lang('administracion.eliminar')</a>
        </div>
    </div>
</form>


@endsection
@section('javascript')

<script type="text/javascript">
$(document).ready(function(){
    setTimeout(function(){
        $(".alert").slideUp(500);
    },10000)
    $(".btn-danger").click(function(event){
        event.preventDefault();
        if(confirm("@lang('administracion.confirmar_eliminar')")){
            document.location=$(this).attr("href");
        }
    })
})
</script>

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
