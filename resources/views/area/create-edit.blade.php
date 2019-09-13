@extends('admin.layouts.app')
@section('title', 'Área')
@section('components')
<div class="row col-md-12">
    <div class="col">
        <h5 class="one">Área</h5>
    </div>
</div>
@endsection
@section('content')
    <div class="card-block">
        {!! Form::open(['route' => isset($area) ? ['areas.update', $area->codigo_area] : 'areas.store', 'id' => 'area-form']) !!}
            <div class='row d-flex m-10 justify-content-center'>
                <div class='col-sm-4'>    
                    {!! Form::label('text', 'Nombre'.'*', ['class' => 'col-form-label']); !!}
                    {!! Form::text('nombre_area', isset($area) ? $area->nombre_area : null,['class' => 'form-control', 'id' => 'nombre_area', 'required' => '']); !!}
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="text-center">
                        {!! link_to_route('areas.index', 'cancelar', [], ['class' => 'btn btn-secondary btn-sm']); !!}                    
                        {!! Form::submit('guardar', ['class' => 'btn btn-success btn-sm', 'id' => 'area-success', 'data-resource' => isset($area) ? 'edit' : 'create' ]) !!}
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection
@push('scripts')
<script src="{{ asset('js/area/areacreateedit.js') }}"></script>
@endpush
