@extends('layouts.admin')
@section('css')
    <link href="css/slim.min.css" rel="stylesheet">
@endsection

@section('content')

<div class="row">
     <div class="col-lg-12">
        <h1 class="page-header">{{ $panel->name }} - Related exams</h1>
    </div>
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="{{ route('administracion_home') }}"><i class="fa fa-dashboard"></i> @lang('administracion.inicio')</a></li>
            <li><a href="{{ route('categories.index') }}"><i class="fa fa-fw fa-pencil"></i> @lang('administracion.categories')</a></li>
            <li><a href="{{ route('categories.edit', codifica($category->id) ) }}"><i class="fa fa-fw fa-pencil"></i> {{ $category->category }}</a></li>
            <li><a href="{{ route('panels.index') }}"><i class="fa fa-fw fa-pencil"></i> @lang('administracion.panels')</a></li>
            <li><a href="{{ route('panels.edit', codifica($panel->id) ) }}"><i class="fa fa-fw fa-pencil"></i> {{ $panel->name }}</a></li>
            <li>Related exams</li>
        </ol>
    </div>
</div>
<div class="row">

    <div class="col-lg-6">
        <div class="input-group">
            <input type="text" class="form-control" id="q" name="q" value="{{ old('q') }}" autocomplete="off" autofocus>
        </div>
    </div>
    <div class="col-lg-6">
        <p class="text-right"><a href="{{ route('panels.index') }}" class="btn btn-sm btn-primary"><i class="fa fa-fw fa-list"></i> @lang('administracion.volver_lista')</a></p>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12"><!-- class tr active success warning danger -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="30"></th>
                        <th>Name</th>
                        <th>Exam full name</th>
                        <th>Quest Code</th>
                    </tr>
                </thead>
                <tbody id="tbody_ajax">
                </tbody>
            </table>
            <h2>Selected</h2>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="30"></th>
                        <th>Name</th>
                        <th>Exam full name</th>
                        <th>Quest Code</th>
                    </tr>
                </thead>
                <tbody>
            @foreach($exams as $exam)
                @if ($exam->relacionado)
                <tr>
                    <td>
                        <a href="{{ route('related_marcar',['id'=>codifica($exam->id),'accion'=>0]) }}"><i class="fa fa-check-square"></i></a>
                    </td>
                    <td>{{ $exam->name }}</td>
                    <td>{{ $exam->full_name }}</td>
                    <td>{{ $exam->quest_code }}</td>
                </tr>
                @endif
            @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection
@section('javascript')

<script type="text/javascript">
$(document).ready(function(){
    var timeout;
    $('#q').keyup(function(){
        $('#tbody_ajax').html('');
        clearTimeout(timeout);
        timeout = setTimeout(function(){
            if($('#q').val().length>=2){
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "{{ route('related_exams_ajax') }}?q=" + escape($('#q').val()),
                    success: function(data){
                        $('#tbody_ajax').removeClass('cargando').html(data.data);
                    }
                });
            }
        },300);
    })
})
</script>

@endsection
