<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
    use HasFactory;
    public function product(){
        return $this->hasMany(related:'App\Models\Product',foreignKey:'category_id',localKey:'id');
       }
}
