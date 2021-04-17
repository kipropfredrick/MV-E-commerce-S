<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'slug',
        'price',
        'oprice',
        'shipping_cost',
        'description','category_id',
        'brand_id','image_path'];
        public function categories ()
    {
        return $this-> belongsToMany (Categories :: class);
    }
    public function category(){
        return $this->belongsTo(Sub_categories::class, 'subcat_id');
    }
}
