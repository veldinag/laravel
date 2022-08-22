<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(int $id = 0) {
        if ($id == 0) {
            $news = $this->getNews();
        } else {
            $news = $this->getNewsByCategory($id);
        }
        return view('news.index', [
            'newsList' => $news
        ]);
    }

    public function show(int $id) {
        $news = $this->getNewsById($id);
        return view('news.show', [
            'news' => $news
        ]);
    }
}
