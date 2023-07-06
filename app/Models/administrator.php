<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class administrator extends Model
{
    use HasFactory;

    protected $table = "administrator";
    protected $primaryKey = "id";
    protected $fillable = ["nombre", "apellidos", "tipoIdentificacion", "numeroIdentificacion", "profesion"];

}
