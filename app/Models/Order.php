<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    use HasFactory;
    protected $fillable = ['delivery_id'];
    public function delivery_addresses()
    {
        return $this->belongsTo(Delivery_addresses::class);
    }
    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }
}
