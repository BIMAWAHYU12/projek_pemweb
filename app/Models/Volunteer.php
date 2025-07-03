<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Volunteer extends Model
{
    use SoftDeletes;

    protected $table = 'information';

    protected $fillable = [
        'title',
        'content',
        'image',
        'link',
        'category_id',
    ];

    /**
     * Relasi ke kategori.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relasi untuk user yang mem-bookmark informasi ini.
     */
    public function bookmarkedBy(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'bookmarks', 'information_id', 'user_id');
    }
}
