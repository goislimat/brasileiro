@extends('app')

@section('content')
<div class="container">
    <h1>Editar Jogador</h1>
    
    @if($errors->any())
    <ul class="list-group">
        @foreach($errors->all() as $error)
        <li class="list-group-item list-group-item-danger">{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    
    {{ Form::open(['route' => ['jogador.update', $jogador->id], 'method' => 'put']) }}
    
        {{ Form::label('equipe_id', 'Equipe:') }}
        {{ Form::select('equipe_id', $equipes, $jogador->equipe_id, ['class' => 'form-control']) }}
    
        {{ Form::label('nome', 'Nome:') }}
        {{ Form::text('nome', $jogador->nome, ['class' => 'form-control', 'placeholder' => 'Digite o nome']) }}
        
        {{ Form::label('idade', 'Idade:') }}
        {{ Form::number('idade', $jogador->idade, ['class' => 'form-control']) }}
    
        {{ Form::label('posicao', 'Posição:') }}
        {{ Form::text('posicao', $jogador->posicao, ['class' => 'form-control', 'placeholder' => 'Digite a posição']) }}
    
        {{ Form::submit('Concluir', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
</div>
@endsection