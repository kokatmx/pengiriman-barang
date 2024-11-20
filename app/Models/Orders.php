<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Orders extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'id_user',
        'id_courier',
        'id_items',
        'id_tracking',
    ];
}
