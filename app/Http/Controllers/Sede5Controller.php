<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sede5;

class Sede5Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $sede5s = Sede5::all();
        return view('sede5.index') ->with('sede5s',$sede5s);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('sede5.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sede5s = new Sede5();

        $sede5s->ip = $request->get('ip');
        $sede5s->sector = $request->get('sector');
        $sede5s->usuario = $request->get('usuario');
        $sede5s->pc = $request->get('pc');
        $sede5s->serial = $request->get('serial');
        $sede5s->disponible = $request->get('disponible');

        $sede5s->save();

        return redirect('sede5s');

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
         $sede5 = Sede5::find($id);
         return view('sede5.edit')->with('sede5',$sede5);
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
        $sede5 = Sede5::find($id); 
        
        $sede5->ip = $request->get('ip');
        $sede5->sector = $request->get('sector');
        $sede5->usuario = $request->get('usuario');
        $sede5->pc = $request->get('pc');
        $sede5->serial = $request->get('serial');
        $sede5->disponible = $request->get('disponible');

        $sede5->save();

        return redirect('sede5s');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $sede5 = Sede5::find($id);
      $sede5->delete();
      return redirect('sede5s');

    }
}
