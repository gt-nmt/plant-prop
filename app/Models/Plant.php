<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    #use HasFactory;

    protected $fillable = [
        'common_name',
        'scientific_name',
        'family_name',
    ];

    protected $hidden = [];
    protected $casts = [];

    public function batch(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Batch::class);
    }
}
