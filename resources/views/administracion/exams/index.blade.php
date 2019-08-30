@extends('layouts.admin')

@section('content')

<div class="row">
     <div class="col-lg-6">
        <h1 class="page-header">@lang('administracion.exams')</h1>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ route('administracion_home') }}"><i class="fa fa-dashboard"></i> @lang('administracion.inicio')</a></li>
            <li class="active"><i class="fa fa-fw fa-pencil"></i> @lang('administracion.exams')</li>
        </ol>
    </div>
</div>


<div class="row">
    <div class="col-lg-8">
        <form role="search" action="{{ route("exams.index") }}" name="f_search" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="exam_filter" value="{{old('exam_filter') }}">
                <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Search</button>
                </span>
            </div>
        </form>
    </div>
    
    <div class="col-lg-4">
        <p class="text-right"><a href="{{ route('exams.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-fw fa-plus-circle"></i> @lang('administracion.nuevo')</a></p>
    </div>
</div>

<div class="row">
    <div class="col-lg-12"><!-- class tr active success warning danger -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>@lang('administracion.exams')</th>
                        <th>Exam full name</th>
                        <th>Quest Code</th>
                        <th width="80"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($exams as $exam)
                    <tr>
                        <td><a href="{{ route('exams.edit', codifica($exam->id) ) }}" title="@lang('administracion.editar')">{{ $exam->name }}</a></td>
                        <td><a href="{{ route('exams.edit', codifica($exam->id) ) }}" title="@lang('administracion.editar')">{{ $exam->full_name }}</a></td>
                        <td><a href="{{ route('exams.edit', codifica($exam->id) ) }}" title="@lang('administracion.editar')">{{ $exam->quest_code }}</a></td>
                        <td>
                            <a href="{{ route('exams.edit', codifica($exam->id) ) }}" title="@lang('administracion.editar')"><i class="fa fa-fw fa-edit"></i></a>
                            <a href="{{ route('exams_eliminar', codifica($exam->id) ) }}" title="@lang('administracion.eliminar')"><i class="fa fa-fw fa-ban bloquear"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        {{$exams->appends(Request::except('page'))->render()}}
    </div>
</div>

@endsection
@section('javascript')
<script type="text/javascript">
$(document).ready(function(){
    $(".bloquear").click(function(event){
        event.preventDefault();
        if(confirm("@lang('administracion.confirmar_eliminar')")){
            document.location=$(this).parent().attr("href");
        }
    })
    setTimeout(function(){
        $(".alert").slideUp(500);
    },10000)
})
</script>
@endsection
