<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    public const DRAFT = 'DRAFT';
    public const ACTIVE = 'ACTIVE';
    public const BLOCKED = 'BLOCKED';

    protected $table = "news";

    public static $selectedFields = [
        'news.id as id',
        'category_id',
        'categories.title as category',
        'news.title as title',
        'slug',
        'author',
        'status',
        'image',
        'text',
        'news.description as description',
        'news.created_at as created_at'
    ];

    protected $fillable = [
        'category_id',
        'source_id',
        'slug',
        'title',
        'slug',
        'author',
        'status',
        'image',
        'text',
        'description'
    ];

    /* protected $casts = [
        'is_admin' => 'bool'
    ];*/

    public function scopeOrder(Builder $query): Builder
    {
        return $query->orderBy('news.id');
    }

    // Relations

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function source(): BelongsTo
    {
        return $this->belongsTo(Source::class);
    }
}
