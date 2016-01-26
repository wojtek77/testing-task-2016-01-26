<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Vehicle;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

use App\Http\Requests\VehicleRequest;

class VehiclesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $vehicles = Vehicle::paginate(15);

        return view('camp.vehicles.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('camp.vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(VehicleRequest $request)
    {
        
        Vehicle::create($request->all());

        Session::flash('flash_message', 'Vehicle added!');

        return redirect('camp/vehicles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vehicle = Vehicle::findOrFail($id);

        return view('camp.vehicles.show', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::findOrFail($id);

        return view('camp.vehicles.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, VehicleRequest $request)
    {
        
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->update($request->all());

        Session::flash('flash_message', 'Vehicle updated!');

        return redirect('camp/vehicles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        Vehicle::destroy($id);

        Session::flash('flash_message', 'Vehicle deleted!');

        return redirect('camp/vehicles');
    }

}
