<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contractor;

class contractorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contractors = contractor::all();
        $i = 1;
        return view ('contractors.index' ,compact('contractors','i'));
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
            'name' => 'required|min:3|max:50|unique:contractors,name',
            'phone'=> 'required|numeric',
        ]);

        // Store the blog post...
        $contractor=new contractor();
        $contractor->name = $request['name'];
        $contractor->phone = $request['phone'];
        $contractor->save();
       return  redirect(route('contractors.index'));
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
        $contractor= contractor::findOrFail($id);
        return view ('contractors.edit',compact('contractor','id'));
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
        $contractor = contractor::find($id);

        $contractor->name = $request->name;
        $contractor->phone = $request->phone;
        
        $contractor->save();

        return redirect(route('contractors.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contractor= contractor::findOrFail($id);
       
        $contractor->delete();

        return redirect(route('contractors.index'));
    }
}
