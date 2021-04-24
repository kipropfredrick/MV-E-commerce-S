<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    public function produc()
{
    return $this->hasMany('Product');
}
public function product(){
  return $this->hasMany(related:'App\Models\Sub_category' ,foreignKey:'subcat_id');

}

}
