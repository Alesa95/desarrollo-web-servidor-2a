<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    use HasFactory;

    public function comics(): HasMany
    {
        return $this->hasMany(Comic::class);
    }
}
