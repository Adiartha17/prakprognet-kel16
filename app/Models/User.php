<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Transaction;
use App\Models\ProductReview;
use App\Models\UserNotification;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_name',
        'email',
        'password',
        'alamat',
        'telepon',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function alreadyReviewed($product_id, $id)
    {
        $alrReviewd = false;
        foreach ($this->transactions as $transaction) {
            //dd($transaction);
            foreach ($this->reviews as $review) {
                if ($review->product_id == $product_id && $review->user_id == Auth::user()->id && $review->transaction_id == $id) {
                    $alrReviewd = true;
                    break;
                } else {
                    continue;
                }
            }
        }
        return $alrReviewd;
    }

    public function createNotifUser($data)
    {
        $notif = new UserNotification();
        $notif->type = 'App\Notifications\AdminNotification';
        $notif->notifiable_type = 'App\Models\User';
        $notif->notifiable_id = $this->id;
        $notif->data = $data;
        $notif->read_at =null;
        $notif->save();
    }
}
