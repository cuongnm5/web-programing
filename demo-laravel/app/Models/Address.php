<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable=['addressline','city','state','zip','phone','country'];
    public function user(){
        $this->belongsTo(User::class);
    }
}
