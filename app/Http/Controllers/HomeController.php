<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index(){

        $blog = Blog::paginate(3);

        return view('home.index', ['blog' => $blog]);
    }

    public function ficha(){


        return view('ficha.index');
    }

    public function store(Request $request){

        $blog = new Blog;

        $blog->titulo = $request->titulo;
        $blog->subtitulo = $request->subtitulo;
        $blog->categoria = $request->categoria;

        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $requestImagem = $request->imagem;

            $extension->$requestImagem->extension();

            $imagemNome = md5($requestImagem->imagem->getClientOriginalName(). strtotime("now")). "." . $extension;

            $request->imagem->move(public_path('img/blog'), $imagemNome);

            $blog->imagem = $imagemNome;


        }

        $blog->save();

        return redirect('/');
    }

    
}
