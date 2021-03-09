<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
// use DB;  //permite usar a base de dados de forma normal 
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //lista de todos os posts
    public function index()
    { 
        // $posts = Post::all()   //retorna todos os postes da tabela;
        //$posts = Post::where('titulo','Post One ')->get()  // retorna apenas um elementos ou forma eh usar o ::find();

        //$posts = DB::select('SELECT * FROM posts');
        //asc -> ascendente /desc -> descendente *ordenado pela data de criacao
        // $posts = Post::orderBy('titulo','desc')->take(1)->get();
        // $posts = Post::orderBy('titulo','desc')->get();

        $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creatin g a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     //reprenseta o formulario ou cria o fomulario
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //submeter ou enviar para o modelo para a base de dados
    public function store(Request $request)
    {
    //    dd($request->all());
        $this->validate($request, [
            'titulo'=>'required',
            'body' => 'required'
        ]);
        // Post::create([
        //     'titulo'=>$request->titulo,
        //     'body'=>$request->body,
        // ]);

        $post = new Post;
        $post->titulo = $request->input('titulo');
        $post->body = $request->input('body');
        $post->save();
        
        return redirect('/posts')->with('success','Post Criado');

        // return "Post criado com sucesso!";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //ja nao eh preciso chamar essa funcao
    {
        //Post -> nome do modelo usado
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post',$post);
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

