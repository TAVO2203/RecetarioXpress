<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recetas extends Model
{
    use HasFactory;
    protected $table = 'recetas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Titulo',
        'Instrucciones',
    ];
    
}
