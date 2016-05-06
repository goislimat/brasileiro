@extends('app')

@section('content')
<div class="container">
    <h1>Lista de Jogadores</h1>
    
    {{ link_to_route('jogador.create', 'Novo', [], ['class' => 'btn btn-primary']) }}
    
    <table class="table table-condensed">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Idade</td>
                <td>Posição</td>
                <td>Ação</td>
            </tr>
        </thead>
        <tbody>
            @foreach($jogadores as $jogador)
            <tr>
                <td>{{ $jogador->id }}</td>
                <td>{{ link_to_route('jogador.show', $jogador->nome, $jogador->id, []) }}</td>
                <td>{{ $jogador->idade }}</td>
                <td>{{ $jogador->posicao }}</td>
                <td>
                    {{ link_to_route('jogador.edit', 'Editar', $jogador->id, ['class' => 'btn btn-warning col-md-5']) }}
                    {{ Form::open(['route' => ['jogador.destroy', $jogador->id], 'method' => 'delete', 'class' => 'form-delete']) }}
                        {{ Form::submit('Excluir', ['class' => 'btn btn-danger col-md-5 col-md-offset-2']) }}
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
<script>
    $(document).on('submit', '.form-delete', function() {
        return confirm('Tem certeza que deseja excluir?');
    });
</script> 
@endsection