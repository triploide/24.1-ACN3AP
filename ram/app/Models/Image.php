<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Image extends Model
{
    use HasFactory;

    // Cuando la foreign key está en mi tabla la relación es BelongsTo
    // Cuando la foreign key está en la otra tabla la relación es HasOne o HasMany
    public function movie() : HasOne
    {
        return $this->hasOne(Movie::class);
    }
}
