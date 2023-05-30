<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  use HasFactory;

  protected $fillable = [
    'category_name'
  ];

  
  public function subcategories()
  {
      return $this->hasMany(SubCategories::class, 'category_id', 'id');
  }

//   public function company_deal()
//   {
//       return $this->hasMany(CompanyDeals::class);
//   }
}
