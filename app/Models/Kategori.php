<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'product_categories';
    protected $fillable = [
        'category_name',
    ];

    public function details()
    {
        return $this->hasMany(product_kategori_detail::class);
    }

    public function products()
    {
        return $this->belongsTo(Produk::class, 'product_kategori_details');
    }
}