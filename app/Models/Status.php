<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Status extends Model
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
