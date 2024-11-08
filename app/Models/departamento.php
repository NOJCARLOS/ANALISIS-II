<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    protected $table = 'departamento';
    use HasFactory;
    public function pais()
    {
        return $this->belongsTo(pais::class, 'id_pais');
    }
}
