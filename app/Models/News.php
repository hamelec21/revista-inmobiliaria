<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['titulo','extracto','imagen','url'];
    use HasFactory;


    public function scopeBuscar($query, $buscar)
    {

        if ($buscar === '') {
            return;
        }
        return $query->where('titulo', 'like', '%' . $buscar . '%');
    }


}
