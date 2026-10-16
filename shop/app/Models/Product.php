<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['type_id','name','description','price'];
    
    public function type() {
        return$this->belongsTo(type::class);
    }
}
