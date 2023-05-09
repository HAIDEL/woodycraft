<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{


    use HasFactory;

    public function delivery_addresses()
    {
        return $this->belongsTo(Delivery_addresses::class);
    }
}
