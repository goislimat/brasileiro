@extends('app')

@section('content')
<div class="container">
    <h2>#{{ $jogador->id }} - {{ $jogador->nome }}</h2>
    <p>{{ $jogador->idade }}</p>
    <h3>{{ $jogador->posicao }}</h3>
</div>
@endsection