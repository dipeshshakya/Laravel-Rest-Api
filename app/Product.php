<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Review;

class Product extends Model
{
    //
    protected $fillable=[
        'name','detail','stock','price','discount'
        ];
    public function review(){
        return $this->hasMany(Review::class);
    }
}
