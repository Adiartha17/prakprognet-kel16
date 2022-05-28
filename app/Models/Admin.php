<?php

namespace App\Models;

use App\Models\AdminNotification;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $table = 'admins';
    protected $guard = 'admin';
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'admin_name',
        'username',
        'password',
        'admin_address',
        'phone',
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

    public function createNotif($data)
    {
        $notif = new AdminNotification();
        $notif->type = 'App\Notifications\ProducNotification';
        $notif->notifiable_type = 'App\Models\Admin';
        $notif->notifiable_id = $this->id;
        $notif->data = $data;
        $notif->read_at = null;
        $notif->save();
    }
}
