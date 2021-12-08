@extends('admin.temeplates.layout')

@section('title','Detalhes do Cliente')

@section('content')
    <h1>Cliente {{ $cliente->nome}}</h1>

    <ul>
        <li>Nome: {{ $cliente->nome}}</li>
        <li>Apelido: {{ $cliente->apelido}}</li>
        <li>Contacto: {{ $cliente->contacto}}</li>
    </ul>
    
    <h6><a href="{{ route('cliente.index')}}"><<</a></h6>
@endsection
    
