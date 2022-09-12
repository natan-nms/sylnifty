<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'service_id', 'whatsapp',
        'price',
        'short_description',
        'long_description',
        'image',
        'status'
    ];
}
