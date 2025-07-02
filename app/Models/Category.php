<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes; // <-- 2. GUNAKAN TRAIT

    protected $fillable = ['name', 'slug'];

    public function information(): HasMany
    {
        return $this->hasMany(Information::class);
    }
}