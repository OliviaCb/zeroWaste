<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipes';
    public $timestamps = true;

  //  protected $casts = [
  //      'cost' => 'float'
  //  ];

    protected $fillable = [
        'title',
        'products',
        'food_processors',
        'time'
    ];
}
