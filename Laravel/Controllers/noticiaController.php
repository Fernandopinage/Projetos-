<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticia;

class noticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = noticia::all();

        return view('home',compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forme_create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // gravar dados via POST do furmulario forme_create
        $noticia = new noticia;

        $noticia->titulo = $request->titulo;
        $noticia->autor = $request->autor;
        $noticia->texto =$request->texto;

        if(isset($request->checkbox_v)){
            $noticia->visivel = true;
        }else
            $noticia->visivel = false;

        $noticia->save();

        return redirect('/');
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
        $noticia = noticia::find($id);
        return view('editar',compact('noticia'));
        
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
        $noticia =  noticia::find($id);
        
        $noticia->titulo = $request->titulo;
        $noticia->autor = $request->autor;
        $noticia->texto = $request->texto; 
        if(isset($request->checkbox_v)){
            $noticia->visivel = true;
        }else
            $noticia->visivel = false;

        $noticia->save();

        return redirect('/gerenciar');
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
        noticia::destroy($id);
        return redirect('gerenciar');
    }

    public function option(){

        $dados = noticia::all();
         return view('gerenciar',compact('dados'));
    }
}
