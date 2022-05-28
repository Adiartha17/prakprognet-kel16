<?php

namespace App\Models;

use App\Models\Produk;
use App\Models\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductReview extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function product(){
        return $this->belongsTo(Produk::class,'product_id','id');
    }

    public function response(){
        return $this->hasMany(Response::class, 'review_id', 'id');
    }
}
