<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{

    public function visible($id)
    {
        $social = Social::find($id);
        $social->stamp = !$social->stamp;
        $social->save();

        return back();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.social.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $social = new Social();
        $social->name = $request->name;
        $social->url = $request->url;
        $social->icon = 'undefined';
        $social->save();

        return back()->with('success', 'Social media criada com sucesso');
    }

    public function ApiStore(Request $request){
        $social = new Social();
        $social->name = $request->name;
        $social->url = $request->url;
        $social->icon = $request->icon;
        $social->stamp = $request->stamp;
        $social->save();
        return response()->json($social);
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
     public function ApiShow(){
        $social = Social::all();
        return response()->json($social);
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //delete social
        $social = Social::find($request->id);
        $social->delete();
        return back();
    }
}
