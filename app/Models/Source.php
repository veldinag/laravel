<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Source extends Model
{
    use HasFactory;

    protected $table = "sources";

    public static $selectedFields = [
        'id',
        'name',
        'link',
        'category_id',
        'created_at'
    ];

    protected $fillable = [
        'name',
        'link',
        'category_id'
    ];

    public function news(): HasMany
    {
        return $this->hasMany(News::class, 'source_id', 'id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
