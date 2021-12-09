<form action="{{route('cliente.destroy',$client->id)}}" method="post">
    @csrf
    @method('DELETE')
    <div class="modal fade" id="modalDelete{{$client->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{__('Deletar Cliente')}}</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span> 
                    </button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja Eliminar o cliente <b>{{$client->nome}}</b>
                </div>
                <div class="modal-footer">
                    <button class="btn gray btn-outline-secondary" type="button" data-dismiss="modal" >
                        {{__('Cancelar')}}
                    </button>
                    <button class="btn btn-outline-danger" type="button" >
                        {{__('Eliminar')}}
                    </button>
                </div>
            </div>
            {{__('Eliminar')}}
        </div>
    </div>

    
</form>    