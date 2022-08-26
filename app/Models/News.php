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
        'id',
        'category_id',
        'title',
        'slug',
        'author',
        'status',
        'image',
        'description',
        'created_at'
    ];


    public function getNews()
    {
        return DB::table($this->table)->get(self::$selectedFields);
    }

    public function getNewsById($id)
    {
        return DB::table($this->table)->find($id, self::$selectedFields);
    }
}
