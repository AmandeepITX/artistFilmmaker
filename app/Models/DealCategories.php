<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealCategories extends Model
{
  use HasFactory;

  protected $fillable = [
    'deal_id',
    'category_id'
  ];

  
  public function subcategories()
  {
      return $this->hasMany(DealSubCategories::class, 'sub_category_id', 'id');
  }
  
  public function categories()
  {
      return $this->hasOne(Categories::class, 'id', 'category_id');
  }
  
}