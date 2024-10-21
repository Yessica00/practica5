<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reticula extends Model
{
    protected $fillable = [
        'descripcion',  // Atributo permitido para asignación masiva
        'fechav',       // Atributo permitido
        'carrera_id',   // Atributo permitido
    ];
    use HasFactory;
    public function carrera():BelongsTo{
        return $this->belongsTo(Carrera::class);
      }
}
