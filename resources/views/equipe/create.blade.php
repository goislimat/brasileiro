@extends('app')

@section('content')
<div class="container">
    <h1>Nova Equipe</h1>
    
    @if($errors->any())
    <ul class="list-group">
        @foreach($errors->all() as $error)
        <li class="list-group-item list-group-item-danger">{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    
    {{ Form::open(['route' => ['equipes.store'], 'method' => 'post']) }}
    
        {{ Form::label('nome', 'Nome:') }}
        {{ Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Digite o nome']) }}
        
        {{ Form::label('uf', 'UF:') }}
        {{ Form::text('uf', null, ['class' => 'form-control', 'placeholder' => 'Digite o UF']) }}
    
        {{ Form::label('estadio', 'Estádio:') }}
        {{ Form::text('estadio', null, ['class' => 'form-control', 'placeholder' => 'Digite o nome do estádio']) }}
    
        {{ Form::submit('Concluir', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
</div>
@endsection