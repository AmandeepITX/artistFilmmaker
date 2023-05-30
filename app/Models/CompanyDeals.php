<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CompanyDeals extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'subcategory_id',
        'discount',
        'description',
        'logo',
        'profile_image',
        'industry',
        'website_address',
        'facebook_link',
        'twitter_link',
        'linkedin_link',
        'instagram_link',
        'deal_type',
        'sub_category',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function category()
    // {
    //     return $this->belongsTo(Categories::class);
    // }

    public function category()
    {
      return $this->hasMany(DealCategories::class, 'deal_id', 'id');
    }

    public function industries()
    {
        return $this->belongsTo(Industry::class, 'industry','id'); 
    }
}
