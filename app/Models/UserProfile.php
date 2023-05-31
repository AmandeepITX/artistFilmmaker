<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'website',
        'email',
        'bio_info',
        'address',
        'city',
        'state',
        'zip_code',
        'available_to_film',
        'seekin_filmmaker',
        'facebook_link',
        'twitter_link',
        'linkedin_link',
        'instagram_link',
        'youtube_link',
        'description',
        'states_id',

    ];

    public function state()
    {
        return $this->belongsTo(state::class, 'states_id', 'id');

    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');

    }
}
