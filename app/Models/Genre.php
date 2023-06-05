<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
    ];

    public function UserProfile()
    {
        return $this->belongsTo(UserProfile::class, 'genres_id', 'id');

    }
}
