<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Colaborador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'setor',
        'cargo',
        'salario',
        'status',
    ];

    public function tarefas(): HasMany{
        return $this->hasMany(Tarefa::class);
    }
}
