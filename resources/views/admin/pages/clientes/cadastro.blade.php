@extends('admin.temeplates.layout')

@section('title','Cadastro de Clientes')
    


    @section('content')
    <div class="row justify-content-center">
    <div class="card text-center" style="margin-top:5rem;">
    <div class="card-header">
        <h1>Cadastrar novo Cliente</h1>
    </div>
    @include('admin.includes.alerts')
    <div class="card-body">
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
        <div class="">    
            <button class="btn btn-outline-save" type="submit">Salvar</button>
        </div>
        
       
    </form>
    </div>
</div>
</div>
        
    
    

    @endsection