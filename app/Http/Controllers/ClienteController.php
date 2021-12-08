<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateProdutoRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use App\Models\User;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=Cliente::paginate();
        return view('admin.pages.clientes.index',[
            'clientes'=>$clientes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.pages.clientes.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreProdutoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        $dadosCliente=$request->except('arquivo');
        $cliente=Cliente::create($dadosCliente);
        if (!$cliente) {
           return redirect()->back();
        } else {
            return redirect()->route('cliente.index');
        }
         

        // $request->except(''); pega todos os campos exceto os campos imformados
        // $request->all(''); pega todos os campos dos formularios
        // $request->only(''); pega apenas os campos pos celecionado que pode ser um ou varios
        // $request->Input ('nome','padrao'); caso o nome nao esta retorna o valor padrao que pode ser definido a nossa escolha
        
        //dd($request->except('_token'));
        // if($request()->file('arquivo')->isValid()){

          
        // }

        // $request->validate([

        //     'nome'=>'required|min:3|max:255',
        //     'apelido'=>'nullable',
        //     'contacto'=>'required|min:9|max:12',
        //     'arquivo'=>'require|docoment'
        //dd('Tudo Oky');
        // ]);

       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$cliente=Cliente::where('id',$id)->first(); pegando um resgistro no banco de dados atravez do id 
        $cliente=Cliente::find($id); //-pegando um resgistro no banco de dados atravez do id e adicionando na variavel cliente

        if ( !$cliente) {// caso nao encotre o cliente com o id recebido ou seja cliente= null
           return redirect()->back(); // regrece de onde veio
        }else{ // caso encontre va ao link sequinte
            return view('admin.pages.clientes.show',[
            'cliente'=>$cliente
        ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //$cliente=Cliente::where('id',$id)->first(); pegando um resgistro no banco de dados atravez do id 
       $cliente=Cliente::find($id); //-pegando um resgistro no banco de dados atravez do id e adicionando na variavel cliente

       if ( !$cliente) {// caso nao encotre o cliente com o id recebido ou seja cliente= null
          return redirect()->back(); // regrece de onde veio
       }else{ // caso encontre va ao link sequinte
           return view('admin.pages.clientes.edit',[
           'cliente'=>$cliente
       ]);
       }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\UpdateProdutoRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProdutoRequest $request, $id)
    {
        $cliente=Cliente::find($id);
        if(!$cliente)
            return redirect()->back();
        
        $cliente->update($request->except('arquivo'));
            
        return redirect()->route('cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente=Cliente::find($id);
        if(!$cliente)
            return redirect()->back();

        $cliente->delete();

        return redirect()->route('cliente.index');
    }
}
