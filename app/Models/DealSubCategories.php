<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealSubCategories extends Model
{
  use HasFactory;

  protected $fillable = [
    'deal_category_id',
    'sub_category_id',
  ];
  
  
  public function subcategory()
  {
      return $this->hasMany(SubCategories::class, 'id', 'deal_category_id');
  }

}