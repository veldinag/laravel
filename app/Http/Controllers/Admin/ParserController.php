<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Contracts\Parser;
use Illuminate\Http\Request as Request;

class ParserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Response
     */
    public function __invoke(Request $request, Parser $parser)
    {
        $load = $parser->setLink('https://news.yandex.ru/music.rss')
            ->getParseData();
        dd($load);

    }
}
