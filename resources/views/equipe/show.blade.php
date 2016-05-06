@extends('app')

@section('content')
<div class="container">
    <h2>#{{ $equipe->id }} - {{ $equipe->nome }}</h2>
    <p>{{ $equipe->uf }}</p>
    <h3>{{ $equipe->estadio }}</h3>
    
    <h2>Jogador</h2>
    
    <table class="table table-condensed">
        <thead>
            <tr>
                <td>Nome</td>
                <td>Idade</td>
                <td>Posição</td>
            </tr>
        </thead>
        <tbody>
            @foreach($equipe->jogadores as $jogador)
            <tr>
                <td>{{ $jogador->nome }}</td>
                <td>{{ $jogador->idade }}</td>
                <td>{{ $jogador->posicao }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection