<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoinal extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'job',
         'image',
        'comment',
        'published'
      ];
}
