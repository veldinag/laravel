<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
        'title',
        'slug',
        'author',
        'status',
        'image',
        'text',
        'description'
    ];
}
