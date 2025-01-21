<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'total_shipping', 'total_price', 'ci', 'name', 'surname', 'province', 'city', 'address', 'phone', 'email', 'notes'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
