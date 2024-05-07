<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function since() : string
    {
        $carbon = \Carbon\Carbon::createFromFormat('Y', $this->year);

        return $carbon->since();
    }
}
