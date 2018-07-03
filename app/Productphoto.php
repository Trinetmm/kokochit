<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productphoto extends Model
{
    //

protected $table = 'product_photos';
protected $fillable = [
    'product_id', 'path',
];
public function product()
    {
        return $this->belongsTo('App\Product');
    }

}
