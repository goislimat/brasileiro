<?php

namespace Brasil;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    protected $fillable = [
        'nome',
        'uf',
        'estadio'
    ];
    
    public function jogadores()
    {
        return $this->hasMany(Jogador::class);
    }
}
