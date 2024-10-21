<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Materia extends Model
{
    protected $fillable = [
        'nombremateria',  
        'nivel',  
        'nombremediano',     
        'nombrecorto',
        'modalidad',
        'reticula_id',   
    ];
    use HasFactory;
    public function reticula():BelongsTo{
        return $this->belongsTo(Reticula::class);
      }
}
