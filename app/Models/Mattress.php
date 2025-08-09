<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mattress extends Model
{
    protected $table = 'mattress';

    protected $fillable = [
    'name',
    'quantity_in_stock',
    'price',
    'image_path',
    'desc',
    'company_id'
    ];

    
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
