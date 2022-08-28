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

    private static $selectedFields = [
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

    public function getNews()
    {
        return DB::table($this->table)
            ->join('categories', 'news.category_id', '=', 'categories.id')
            ->orderBy('news.id')
            ->get(self::$selectedFields);
    }

    public function getNewsById($id)
    {
        return DB::table($this->table)
            ->join('categories', 'news.category_id', '=', 'categories.id')
            ->where('news.id', '=', $id)
            ->get(self::$selectedFields);
    }

    public function getNewsByCategory($id)
    {
        return DB::table($this->table)
            ->join('categories', 'news.category_id', '=', 'categories.id')
            ->where('category_id', $id)
            ->orderBy('news.id')
            ->get(self::$selectedFields);
    }
}
