<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;
    protected $fillable = [
        'industry_name'
      ];
      public function companyDeals(){
        return $this->belongsTo(Industry::class, 'id','industry_name'); 
      }
}
