<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_id',
    ];

    public function reservations()
    {
        return $this->hasMany('App\Models\reservation', 'start_at');
    }
}
