<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['surname','forname','add1','phone','postcode','email'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
