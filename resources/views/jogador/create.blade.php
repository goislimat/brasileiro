@extends('app')

@section('content')
<div class="container">
    <h1>Novo Jogador</h1>
    
    @if($errors->any())
    <ul class="list-group">
        @foreach($errors->all() as $error)
        <li class="list-group-item list-group-item-danger">{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    
    {{ Form::open(['route' => ['jogador.store'], 'method' => 'post']) }}
        
        {{ Form::label('equipe_id', 'Equipe:') }}
        {{ Form::select('equipe_id', $equipes, null, ['class' => 'form-control']) }}
    
        {{ Form::label('nome', 'Nome:') }}
        {{ Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Digite o nome']) }}
        
        {{ Form::label('idade', 'Idade:') }}
        {{ Form::number('idade', null, ['class' => 'form-control']) }}
    
        {{ Form::label('posicao', 'Posição:') }}
        {{ Form::text('posicao', null, ['class' => 'form-control', 'placeholder' => 'Digite a posição']) }}
    
        {{ Form::submit('Concluir', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
</div>
@endsection