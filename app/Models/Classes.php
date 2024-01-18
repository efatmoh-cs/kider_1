<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'age_from',
        'age_to',
        'starts_at',
        'ends_at',
        'capacity',
        'image',
        'teacher_id'
    ];
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
