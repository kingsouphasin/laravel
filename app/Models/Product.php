<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'size',
        'price',
        'cate_id'
    ];
    public function product(){
        return $this->belongsTo(Category::class);
    }
}
