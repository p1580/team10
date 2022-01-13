<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
    ];

    public function scopeAll($query)
    {
        $query->select('room_id')->groupBy('room_id');
    }

    public function reservations()
    {
        return $this->hasMany('App\Models\reservation', 'cid');
    }
}