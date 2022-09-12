<?php

namespace App\Http\Controllers;

use App\Models\Wiki;
use Illuminate\Http\Request;

class WikiController extends Controller
{
    /**
     * WebScrap
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function WebScrap(Request $request)
    {
        $constList =  $request->all();
        foreach ($constList as $item) {
            $Wiki = new Wiki();
            $Wiki->title = $item[0];
            $Wiki->content = $item[1];
            $Wiki->user_id = null;

            $Wiki->save();
        }

        $wikiList = Wiki::all();
        return response()->json([
            'status' => 'success',
            'data' => $wikiList,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $wikiList = Wiki::all();
        return view('wiki', compact('wikiList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.wiki.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $Wiki = new Wiki();
        $Wiki->title = $request->title;
        $Wiki->content = $request->content;
        $Wiki->user_id = auth()->user()->id;
        $Wiki->save();
        return back()->with('success', 'Wiki criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wikiList = Wiki::find($id);
        return view('wiki', compact('wikiList'));
    }

    public function searchByKey($key){
        $wikiList = Wiki::where('title', 'like', $key.'%')->get();
        return view('wiki', compact('wikiList'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($name)
    {
        $wiki = Wiki::find($name);
        $wiki->delete();
        return back()->with('success', 'Wiki deletado com sucesso!');
    }

}
