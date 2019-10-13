<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\funcionario;


class funcionarioController extends Controller
{
        // tela de login
    public function index()
    {
        //rota para index tela de login

        return view('index');

        //------------------------------------------------  
    }



    public function validaLogin(Request $request){

        // metodo para validar o login

        $this->validate($request,[

            'nome'=>'required',
            'password'=>'required'

        ]);

        
        // select da funçao    
        $dados = funcionario::where('nome',$request->nome)->first();   
        // se tiver um login cai na condição
        if($dados){
           // se tiver senha corretar cai na condiçao
                if(Hash::check($request->password, $dados->senha)){

                    return redirect('home');
                    
                }else{

            
            return view('index');
           }

           return view('index');
        }
        return view('index');
        //------------------------------------------------  
    }


    // funçao da pagina criar novo funcionario
    public function createF(){

       //rota para abrir uma pagina de cadastro usuario 
        return view('newfuncionario');
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {


        //validar formulario de novo funcionario

        $this->validate($request,[

            'nome'=>'required',
            'password'=>'required',
            'email'=>'required',
            'email2'=>'required|email'

        ]);
     
        //------------------------------------------------   

        //medoto para verifica nome email repeditos

        $dados = funcionario::where('nome',"=",$request->nome)->orwhere('email',"=",$request->email)->get();

        if($dados->count()>0){
            $erros_m = ['Nome ou Email já existe'];
            return view('newfuncionario',compact('erros_m'));
        }


        //------------------------------------------------


        //metodo de cadastro o novo funcionario

        $dados = new funcionario;

        $dados->nome = $request->nome;
        $dados->senha = Hash::make($request->password);
        $dados->email = $request->email;
        $dados->save();
        return view('index');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }

    public function recuperaConta(){

        //rota de metodo para recupera conta 

        return view('recuperaConta');
        //------------------------------------------------
    }

    public function validarecuperaConta(Request $request){

        // validando o campo email 

        $this->validate($request,[

            'email'=>'required'
        ]);


        
        return redirect('/');
    }

    public function home (){

        return "text1";
    }

}
