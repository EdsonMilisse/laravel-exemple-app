@extends('admin.temeplates.layout')

@section('title','Clientes')
    


@section('content')

    <h1 class="text-center">Pagina de Clientes</h1>

    <a class="btn btn-outline-dark" href="{{route('cliente.create')}}"> Cadastrar Novo Cliente</a>
    <hr><br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Contacto</th>
                <th>Acoes</th>
            </tr>        
        </thead>
        <tbody>
            @foreach ($clientes as $client)
                <tr>
                    <td>{{$client->nome}}</td>
                    <td>{{$client->apelido}}</td>
                    <td>{{$client->contacto}}</td>
                    <td width=100>
                        <a href="{{route('cliente.edit',$client->id)}}">Editar</i></a>
                        <a href="{{route('cliente.show',$client->id)}}">Detalhes</a>
                        <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#modalDelete{{$client->id}}" > 
                            {{__('Eliminar')}}
                        </a>
                        {{-- <form action="{{route('cliente.destroy',$client->id)}}" method="post">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-link" type="submit" >Eliminar</button>
                        </form>  --}}
                        @include('admin.includes.deleteConfirm')
                    </td>
                </tr>
                
            @endforeach
        </tbody>
        
    </table>
    {!! $clientes->links()!!}
    
    
@endsection
