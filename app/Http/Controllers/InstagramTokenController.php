<?php

namespace App\Http\Controllers;

use App\Models\InstagramToken;
use Illuminate\Http\Request;

class InstagramTokenController extends Controller
{
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
        //public function instaSettingsCreate()
        $data = [
            'current_token' => InstagramToken::first(),
        ];
        return view('admin.dashboard.instatoken.create', compact('data'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $token = new InstagramToken();
        $token->token = $request->token_by_instagram;
        $token->user_id = auth()->user()->id;
        $token->save();

        return back()->with('success', 'Token criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InstagramToken  $instagramToken
     * @return \Illuminate\Http\Response
     */
    public function show(InstagramToken $instagramToken)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InstagramToken  $instagramToken
     * @return \Illuminate\Http\Response
     */
    public function edit(InstagramToken $instagramToken)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InstagramToken  $instagramToken
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InstagramToken $instagramToken)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InstagramToken  $instagramToken
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstagramToken $instagramToken)
    {
        //
    }
}
