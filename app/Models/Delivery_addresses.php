<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery_addresses extends Model
{
    use HasFactory;
    protected $table = 'delivery_addresses';
    protected $fillable = ['firstname','lastname','add1','add2','city','postcode','phone','email'];
}
