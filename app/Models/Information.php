<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes; // <-- 1. IMPORT TRAIT

class Information extends Model
{
    use HasFactory, SoftDeletes; // <-- 2. GUNAKAN TRAIT

    protected $fillable = [
        'category_id',
        'title',
        'content',
        'image',
        'link',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}