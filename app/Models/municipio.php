<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class municipio extends Model
{
    protected $table = 'municipio';
    use HasFactory;
    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }
}
