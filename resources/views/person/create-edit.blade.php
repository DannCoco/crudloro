@extends('admin.layouts.app')
@section('title', 'Persona')
@section('components')
<div class="row col-md-12">
    <div class="col">
        <h5 class="one">Persona</h5>
    </div>
</div>
@endsection
@section('content')
    <div class="card-block">
        {!! Form::open(['route' => isset($person) ? ['persons.update', $person->codigo_persona] : 'persons.store', 'id' => 'person-form']) !!}
            <div class='row'>
                <div class='col-sm-4'>    
                    {!! Form::label('text', 'Nombre'.'*', ['class' => 'col-form-label']) !!}
                    {!! Form::text('nombre_persona', isset($person) ? $person->nombre_persona : null,['class' => 'form-control', 'id' => 'nombre_persona', 'required' => '']) !!}
                </div>
                <div class='col-sm-4'>    
                    {!! Form::label('number', 'Cédula'.'*', ['class' => 'col-form-label']) !!}
                    {!! Form::number('cedula', isset($person) ? $person->cedula : null,['class' => 'form-control', 'id' => 'cedula', 'required' => '']) !!}
                </div>
                <div class='col-sm-4'>    
                    {!! Form::label('text', 'Fecha nacimiento'.'*', ['class' => 'col-form-label', 'id' => 'dropper-default']) !!}
                    {!! Form::date('fecha_nacimiento', isset($person) ? $person->fecha_nacimiento : null,['class' => 'form-control', 'id' => 'fecha_nacimiento', 'required' => '']) !!}
                </div>
            </div>
            <div class='row'>
                <div class='col-sm-4'>    
                    {!! Form::label('text', 'Sexo'.'*', ['class' => 'col-form-label']) !!}
                    <select class="form-control" name="sexo" required>
                        <option value="">Seleccione...</option>
                        @foreach($gender as $key => $value)
                            <option value="{{ $key }}" @if(isset($person) && $person->sexo == $key) selected @endif>{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class='col-sm-4'>    
                    {!! Form::label('email', 'Correo electrónico'.'*', ['class' => 'col-form-label']) !!}
                    {!! Form::email('email', isset($person) ? $person->email : null,['class' => 'form-control', 'id' => 'email', 'required' => '']) !!}
                </div>
                <div class='col-sm-4'>    
                    {!! Form::label('text', 'Nickname'.'*', ['class' => 'col-form-label', 'id' => 'dropper-default']) !!}
                    {!! Form::text('nickname', isset($person) ? $person->nickname : null,['class' => 'form-control', 'id' => 'nickname', 'required' => '']) !!}
                </div>
            </div>
            <div class='row'>
                <div class='col-sm-4'>    
                    {!! Form::label('text', 'Área'.'*', ['class' => 'col-form-label']) !!}
                    <select class="form-control" name="codigo_area" required>
                        <option value="">Seleccione...</option>
                        @foreach($areas as $area)
                            <option value="{{ $area->codigo_area }}" @if(isset($person) && $person->codigo_area == $area->codigo_area) selected @endif>{{ $area->nombre_area }}</option>
                        @endforeach
                    </select>
                </div>
                <div class='col-sm-4'>    
                    {!! Form::label('text', 'Rol'.'*', ['class' => 'col-form-label']) !!}
                    <select class="form-control" name="rol" required>
                        <option value="">Seleccione...</option>
                        @foreach($roles as $key => $value)
                            <option value="{{ $key }}" @if(isset($person) && $person->rol == $key) selected @endif>{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class='col-sm-4'>    
                    {!! Form::label('text', 'Contraseña'.'*', ['class' => 'col-form-label', 'id' => 'dropper-default']) !!}
                    {!! Form::text('password', null,['class' => 'form-control', 'id' => 'password', 'required' => '']) !!}
                </div>
            </div>
            <div class='row'>
                <div class='col-sm-4'>    
                    {!! Form::label('text', 'País'.'*', ['class' => 'col-form-label']) !!}
                    <select class="form-control" id="codigo_pais" name="codigo_pais" data-ajax--url="{{ route('countries.index') }}" data-initial-value="{{ (isset($person)) ? $person->codigo_pais : '' }}" data-placeholder="Seleccione..."  placeholder="Seleccione..." required>
                    </select>
                </div>
                <div class='col-sm-4'>    
                    {!! Form::label('text', 'Departamento'.'*', ['class' => 'col-form-label']) !!}
                    <select class="form-control" id="codigo_departamento" name="codigo_departamento" data-ajax--url="{{ route('states.index') }}" data-initial-value="{{ (isset($person)) ? $person->codigo_departamento : '' }}" data-placeholder="Seleccione..."  placeholder="Seleccione..." required>
                    </select>
                </div>
                <div class='col-sm-4'>    
                    {!! Form::label('text', 'Ciudad'.'*', ['class' => 'col-form-label', 'id' => 'dropper-default']) !!}
                    <select class="form-control" id="codigo_ciudad" name="codigo_ciudad" data-ajax--url="{{ route('cities.index') }}" data-initial-value="{{ (isset($person)) ? $person->codigo_ciudad : '' }}" data-placeholder="Seleccione..."  placeholder="Seleccione..." required>
                    </select>
                </div>
            </div>
            <div class='row'>
                <div class='col-sm-12'>    
                    {!! Form::label('text', 'Comentarios', ['class' => 'col-form-label']) !!}
                    {!! Form::textarea('comentarios', isset($person) ? $person->comentarios : null, ['class' => 'form-control', 'rows' => '2', 'cols' => "5"]) !!}
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="text-center">
                        {!! link_to_route('persons.index', 'cancelar', [], ['class' => 'btn btn-secondary btn-sm']) !!}                    
                        {!! Form::submit('guardar', ['class' => 'btn btn-success btn-sm', 'id' => 'person-success', 'data-resource' => isset($person) ? 'edit' : 'create' ]) !!}
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection
@push('scripts')
<script src="{{ asset('js/person/personcreateedit.js') }}"></script>
@endpush
