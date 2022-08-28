<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(int $id = 0) {
        if ($id == 0) {
            $news = app(News::class)->getNews();
        } else {
            $news = app(News::class)->getNewsByCategory($id);
        }
        return view('news.index', [
            'newsList' => $news
        ]);
    }

    public function show(int $id) {
        $news = app(News::class)->getNewsById($id);
        return view('news.show', [
            'news' => $news[0]
        ]);
    }
}
