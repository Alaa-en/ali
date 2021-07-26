<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\driver;

class driverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = driver::all();
        $i = 1;
        return view ('drivers.index' ,compact('drivers','i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50|unique:drivers,name',
            'phone'=> 'required|numeric',
            'identity'=> 'required|max:50|',
        ]);

        // Store the blog post...
        $driver=new driver();
        $driver->name = $request['name'];
        $driver->phone = $request['phone'];
        $driver->identity = $request['identity'];
        $driver->save();
       return  redirect(route('drivers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $driver= driver::findOrFail($id);
        return view ('drivers.edit',compact('driver','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $driver = driver::find($id);

        $driver->name = $request->name;
        $driver->phone = $request->phone;
        $driver->identity = $request->identity;
        
        $driver->save();

        return redirect(route('drivers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver= driver::findOrFail($id);
        $driver->shift()->delete();

        $driver->delete();

        return redirect(route('drivers.index'));
    }
}
