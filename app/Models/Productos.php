<?php

namespace App\Models;

use Database\Factories\ProductsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Productos extends Model
{
    use HasFactory,Notifiable;

    protected $table = 'productos';

    protected $fillable = [
        'name',
        'description',
        'price',
        'url_image'
    ];


    protected static function newFactory():ProductsFactory
      {
          return ProductsFactory::new();
      }
}
