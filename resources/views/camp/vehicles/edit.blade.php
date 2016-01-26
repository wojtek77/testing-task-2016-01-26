@extends('layouts.master')

@section('content')

    <h1>Edit Vehicle</h1>
    <hr/>

    {!! Form::model($vehicle, [
        'method' => 'PATCH',
        'url' => ['camp/vehicles', $vehicle->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('registration_number') ? 'has-error' : ''}}">
                {!! Form::label('registration_number', 'Registration Number: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('registration_number', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('registration_number', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('engine_capacity') ? 'has-error' : ''}}">
                {!! Form::label('engine_capacity', 'Engine Capacity: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('engine_capacity', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('engine_capacity', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mileage_counter') ? 'has-error' : ''}}">
                {!! Form::label('mileage_counter', 'Mileage Counter: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('mileage_counter', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('mileage_counter', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('last_oil_change') ? 'has-error' : ''}}">
                {!! Form::label('last_oil_change', 'Last Oil Change: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('last_oil_change', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
                    {!! $errors->first('last_oil_change', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection