<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery_addresses extends Model
{
    use HasFactory;

    protected $fillable = ['firstname','lastname','add1','add2','city','postcode','phone','email','paiement'];

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
