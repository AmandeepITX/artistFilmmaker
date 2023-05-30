<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Fortify\TwoFactorAuthenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'member_id',
        'image',
        'name',
        'media_url',
        'website',
        'email',
        'bio_info',
        'status',
        'chamber_member',
        'description',
        'user_type',
        'service',
        'service_status',
        'service_from',
        'service_to',
        'personalization',
        'card_info',
        'other_id',
        'headshot_card',
        'email_verified_at',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    // protected $appends = ['name'];

    // public function getNameAttribute()
    // {
    //     return $this->f_name. ' '.$this->l_name;
    // }

    public function company_deal()
    {
        return $this->hasOne(CompanyDeals::class);
    }

    public function industries(){
        return $this->hasMany(UsersIndustry::class, 'users_id', 'id');
    }
}
