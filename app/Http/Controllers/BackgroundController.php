<?php

namespace App\Http\Controllers;

use App\Models\Background;
use Illuminate\Http\Request;

class BackgroundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $backgrounds = Background::all();
        return view('admin.settings.backgrounds.index', compact('backgrounds'));
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
    public function active(Request $request)
    {
        $allBackgrounds = Background::all();
        foreach ($allBackgrounds as $background) {
            $background->isActive = false;
            $background->save();
        }

        $background = Background::find($request->background_id);
        if($request->isActive == 1){
            $background->isActive = true;
        }
        $background->save();

        return back()->with('success', 'Background has been updated');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          //save image
        // Define o valor default para a variável que contém o nome da imagem
        $nameFile = null;
        // Verifica se informou o arquivo e se é válido
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            // Define um aleatório para o arquivo baseado no timestamps atual
            $name = uniqid(date('HisYmd'));

            // Recupera a extensão do arquivo
            $extension = $request->image->extension();

            // Define finalmente o nome
            $nameFile = "{$name}.{$extension}";

            // Faz o upload:
            $upload = $request->image->storeAs('public/backgrounds', $nameFile);
            // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao

            // Verifica se NÃO deu certo o upload (Redireciona de volta)
            if (!$upload)
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
        }
        $backgrounds = new Background();
        $backgrounds->title = $request->title;
        $backgrounds->image = $nameFile;
        $backgrounds->isActive = false;
        $backgrounds->save();

        if ($backgrounds) {
            return back()->with('success', 'Bakground  registrado com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function show(Background $background)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function edit(Background $background)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Background $background)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function destroy(Background $background)
    {
        //
    }
}
