<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offer extends Model
{
       use HasFactory;

    protected $fillable = [
        'company',
        'title',
        'url',
        'location',
        'offerStatus'
    ];

    public function progresses(): HasMany {
        return $this->hasMany(Status::class, 'id_offer');
    }

}