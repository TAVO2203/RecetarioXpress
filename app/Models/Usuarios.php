<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Nombre',
        'Email',
        'Password',
    ];
    
    protected $hidden = [
        'Password',
    ];
    public $timestamps = false;
    
}
