@extends('layouts.master')

@section('content')

    <h1>Vehicle</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Registration Number</th><th>Engine Capacity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $vehicle->id }}</td> <td> {{ $vehicle->name }} </td><td> {{ $vehicle->registration_number }} </td><td> {{ $vehicle->engine_capacity }} </td>
                </tr>
            </tbody>    
        </table>
    </div>
    
    <h1>Revision</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Field name</th> <th>Old value</th><th>New value</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vehicle->revisionHistory as $history )
                    <tr>
                        <td>{{ $history->fieldName() }}</td> <td> {{ $history->oldValue() }} </td><td> {{ $history->newValue() }} </td>
                    </tr>
                @endforeach
            </tbody>    
        </table>
    </div>

@endsection