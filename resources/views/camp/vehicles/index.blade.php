@extends('layouts.master')

@section('content')

    <h1>Vehicles <a href="{{ url('camp/vehicles/create') }}" class="btn btn-primary pull-right btn-sm">Add New Vehicle</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Name</th><th>Registration Number</th><th>Engine Capacity</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($vehicles as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('camp/vehicles', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->registration_number }}</td><td>{{ $item->engine_capacity }}</td>
                    <td>
                        <a href="{{ url('camp/vehicles/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['camp/vehicles', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $vehicles->render() !!} </div>
    </div>

@endsection
