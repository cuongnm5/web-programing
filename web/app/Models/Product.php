<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','des','size','category_id','image','price'];

    public function category(){
        $this->belongsTo(Category::class);
    }
}
