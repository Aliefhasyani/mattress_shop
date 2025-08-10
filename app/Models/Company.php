<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';

    protected $fillable = ['name','company_email','company_phone_number'];
    public function mattress(){
        return $this->hasMany(Mattress::class);
    }
}
