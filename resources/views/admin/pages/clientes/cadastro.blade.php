@extends('admin.temeplates.layout')

@section('title','Cadastro de Clientes')
    


    @section('content')
    <h1>Cadastrar novo Cliente</h1>
    
    @include('admin.includes.alerts')
    <form class="row g-3" action="{{route('cliente.store')}}" method="POST" enctype="multipart/form-data">
        
        @csrf
        
            <div class="col-md-6">
                <input class="form-control" type="text" name="nome" placeholder="Nome" id="">
            </div>
            <div class="col-md-6">
                <input class="form-control" type="text" name="apelido"placeholder="Apelido" >
            </div>
        
       
            <div class="col-5">
                <input class="form-control" type="text" name="contacto"placeholder="Contacto">
            </div>
            <div class="col-5">
                <input class="form-control" type="file" name="arquivo">
            </div>
        <div class="col-6">    
            <button class="btn btn-outline-save" type="submit">Salvar</button>
        </div>
        
       
    </form>
    
        
    
    

    @endsection