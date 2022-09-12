<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Social;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'ASC')->first();
        //if dont have posts, return response.notPosts
        if (!$posts) {
           return view('responses.DontHave.response')->with('error', [
             'title' => 'Ainda não há posts',
             'message' => 'Em breve publicaremos alguns posts por aqui !',
           ]);
        }
        $comments = Comment::where('post_id', $posts->id)->orderBy('id', 'DESC')->paginate(4);
        $socials = Social::limit(4)->get();
        $data = [
            'posts' => $posts,
            'comments' => $comments,
            'socials' => $socials,
        ];
        return view('blog', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.posts.create');
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
            $upload = $request->image->storeAs('public/Posts', $nameFile);
            // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao

            // Verifica se NÃO deu certo o upload (Redireciona de volta)
            if (!$upload)
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
        }

        $posts = new Post();
        $posts->title = $request->title;
        $posts->body = $request->body;
        $posts->image = $nameFile;
        $posts->user_id = auth()->user()->id;
        $posts->save();

        if ($posts) {
            return back()->with('success', 'Postagem criada com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::where('id', $id)->first();
        if(strlen($posts) === 0){
            return redirect()->route('blog');
        }
        $comments = Comment::where('post_id', $posts->id)->orderBy('id', 'ASC');
        $socials = Social::limit(4)->get();
        $data = [
            'posts' => $posts,
            'comments' => $comments,
            'socials' => $socials,
        ];
        // return $data;
        return view('blog', compact('data'));
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
        //delete post
        $post = Post::find($id);
        $post->delete();
        return back()->with('success', 'Postagem deletada com sucesso!');
    }
}
