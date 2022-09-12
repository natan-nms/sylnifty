<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Exception;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Schedule = Schedule::orderBy('id', 'DESC')->limit(4)->get();

        if(count($Schedule) < 1){
            return view('responses.DontHave.response')->with('error', [
                'title' => 'Ainda não há Evento',
                'message' => 'Em breve publicaremos nossa agenda por aqui !',
            ]);
        }

        return view('agenda.index')->with('data', [
            'Schedule' => $Schedule,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.schedules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Schedule = Schedule::create(
            [
                'day' => $request->day,
                'month' => $request->month,
                'local' => $request->body,
            ]
        );

        if (!$Schedule) {
            throw new Exception('Não foi possivel criar um evento. Tente novamente mais tarde');
        }

        return back()->with('success', 'Evento criado com sucesso');
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
    public function destroy($id)
    {
        //
    }
}
