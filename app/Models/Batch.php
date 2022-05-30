<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    #use HasFactory;

    protected $fillable = [
        'plant_name',
        'customer_name',
        'total_quantity',
        'ready_date',
        'plant_id',
    ];

    protected $hidden = [];
    protected $casts = [];

    public function plant(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Plant::class);
    }
}
