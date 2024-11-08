<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table = 'ubicacion';
    use HasFactory;
    protected $fillable = [
        'numero_oficina',
        'id_municipio',
        'address',
        'is_auxiliatura',
        'state',
    ];


    public function municipio()
{
    return $this->belongsTo(Municipio::class, 'id_municipio');
}


}
