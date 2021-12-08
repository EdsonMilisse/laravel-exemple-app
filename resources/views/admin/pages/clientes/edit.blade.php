@extends('admin.temeplates.layout')

@section('title',"Editar o Cliente {$cliente->nome}")
    


    @section('content')
    <h1>Editar Dados de:  {{$cliente->nome}}</h1>
    
    @include('admin.includes.alerts')

    <form class="row g-3" action="{{route('cliente.update',$cliente->id)}}" method="POST" enctype="multipart/form-data">

        @method('PUT')
        @csrf
        <div class="col-md-6">
            <input class="form-control" type="text" name="nome" value="{{$cliente->nome}}" placeholder="Nome" >
        </div>
        <div class="col-md-6">
            <input class="form-control" type="text" name="apelido"placeholder="Apelido" value="{{$cliente->apelido}}" >
        </div>
    
   
        <div class="col-5">
            <input class="form-control" type="text" name="contacto"placeholder="Contacto" value="{{$cliente->contacto}}">
        </div>
        <div class="col-5">
            <input class="form-control" type="file" name="arquivo">
        </div>
    <div class="col-6">    
        <button class="btn btn-outline-success" type="submit">Actualizar</button>
    </div>
    </form>

    @endsection