<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_kategori_detail extends Model
{
    use HasFactory;
    protected $table = 'product_kategori_details';
    protected $fillable = [
    'product_id',
    'category_id',
];

public function produk() {
    return $this->belongsTo('App\Models\Produk','product_id');
    // return $this->belongsTo(Produk::class,'product_id','id');    
}

public function kategori() {
    return $this->belongsTo('App\Models\Kategori', 'category_id');
    // return $this->belongsTo(Kategori::class,'category_id','id');
}

}
