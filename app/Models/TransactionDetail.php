<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table='transaction_details';


    public function transaction(){
        return $this->belongsTo(Transaction::class,'transaction_id','id');
    }

    public function product(){
        return $this->belongsTo(Produk::class,'product_id','id');
    }
}
