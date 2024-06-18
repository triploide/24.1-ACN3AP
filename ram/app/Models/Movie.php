<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function since() : string
    {
        $carbon = \Carbon\Carbon::createFromFormat('Y', $this->year);

        return $carbon->since();
    }

    // Nombre de la relación
    public function image() : BelongsTo
    {
        // return $this->hasOne(Image::class);
        return $this->belongsTo(Image::class); // FQN del modelo con el que me relaciono
    }

    public function genre() : BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }

    public function tags() : BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
