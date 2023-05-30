<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersIndustry extends Model
{
    use HasFactory;
    
    public function industries() 
    {
        return $this->belongsTo(Industry::class, 'industries_id');
    }
}
