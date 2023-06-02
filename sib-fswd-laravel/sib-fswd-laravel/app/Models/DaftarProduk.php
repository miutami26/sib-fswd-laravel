<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarProduk extends Model
{
     use HasFactory;

     /**
     * fillable
     *
     * @var array
     */
     protected $fillable = [
        'id_kategories',
        ' nama',
        'deskripsi',
        'harga',
        'status',
     ];

      function kategory(){
      return $this->hasMany(Kategory::class, 'id', 'id_kategories');
      }
}
