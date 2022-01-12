<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
		'card_id',
        'cid',
        'start_at',
        'end_of',
		'memo'
        ];

    public function scopeCid($query)
    {
        $query->where('cid', '=', 'F309')
            ->orderBy('cid');
    }
}
