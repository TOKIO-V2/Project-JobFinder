<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StatusCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'comentary',
        'id_offer'
    ];

    public function offer(): BelongsTo {
        return $this->belongsTo(Offer::class, 'id_offer');
    }

}
