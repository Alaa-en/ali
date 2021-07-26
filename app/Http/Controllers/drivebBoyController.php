<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\driverboy;

class drivebBoyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $driverboys = driverboy::all();
        $i = 1;
        return view ('driverboys.index' ,compact('driverboys','i'));
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
            'name' => 'required|min:3|max:50|unique:driverboys,name',
            'phone'=> 'required|numeric',
            'identity'=> 'required|max:50|',
        ]);

        // Store the blog post...
        $driverboy=new driverboy();
        $driverboy->name = $request['name'];
        $driverboy->phone = $request['phone'];
        $driverboy->identity = $request['identity'];
        $driverboy->save();
       return  redirect(route('driveboys.index'));
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
        $driverboy= driverboy::findOrFail($id);
        return view ('driverboys.edit',compact('driverboy','id'));
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
        $driverboy = driverboy::find($id);

        $driverboy->name = $request->name;
        $driverboy->phone = $request->phone;
        $driverboy->identity = $request->identity;
        
        $driverboy->save();

        return redirect(route('driveboys.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driverboy= driverboy::findOrFail($id);
       
        $driverboy->delete();

        return redirect(route('driveboys.index'));
    }
}
