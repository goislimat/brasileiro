@extends('app')

@section('content')
    <div class="container">
        <h1>Lista de Equipes</h1>
        
        {{ link_to_route('equipes.create', 'Novo', [], ['class' => 'btn btn-primary']) }}
        
        <table class="table table-condensed">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>UF</td>
                    <td>Estádio</td>
                    <td>Ação</td>
                </tr>
            </thead>
            <tbody>
                @foreach($equipes as $equipe)
                <tr>
                    <td>{{ $equipe->id }}</td>
                    <td>{{ link_to_route('equipes.show', $equipe->nome, $equipe->id, []) }}</td>
                    <td>{{ $equipe->uf }}</td>
                    <td>{{ $equipe->estadio }}</td>
                    <td class="row">
                        {{ link_to_route('equipes.edit', 'Editar', $equipe->id, ['class' => 'btn btn-warning col-md-5']) }}
                        {{ Form::open(['route' => ['equipes.destroy', $equipe->id], 'method' => 'delete', 'class' => 'form-delete']) }}
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