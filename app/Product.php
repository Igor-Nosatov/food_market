<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'image','category_id', 'category_id', 'brand_id','country_producer_id',
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function countryProducer()
    {
        return $this->belongsTo(CountryProducer::class);
    }

}
