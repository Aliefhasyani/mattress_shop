<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mattress extends Model
{
    protected $table = 'mattress';

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
