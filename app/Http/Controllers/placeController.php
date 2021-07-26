<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\place;


class placeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = place::all();
        $i = 1;
        return view ('places.index' ,compact('places','i'));
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
            'name' => 'required|min:3|max:50|unique:places,name',
          
        ]);

        // Store the blog post...
        $place=new place();
        $place->name = $request['name'];
    
        $place->save();
       return  redirect(route('places.index'));
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
        $place= place::findOrFail($id);
        return view ('places.edit',compact('place','id'));
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
        $place = place::find($id);

        $place->name = $request->name;
     
        $place->save();

        return redirect(route('places.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $place= place::findOrFail($id);
       
        $place->delete();

        return redirect(route('places.index'));
    }
}
