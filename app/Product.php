<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $fillable = [
        'name', 'admin_id', 'category_id', 'brand_id', 'price', 'old_price', 'availability', 'quick_overview', 'detail', 'quantity',
    ];

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
    public function brand()
    {
    	return $this->belongsTo('App\Brand');
    }
    public function images()
    {
        return $this->hasMany('App\Productphoto');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
