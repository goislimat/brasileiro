<?php

namespace Brasil;

use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    protected $table = 'jogadores';
    
    protected $fillable = [
        'equipe_id',
        'nome',
        'idade',
        'posicao'
    ];
    
    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }
}
