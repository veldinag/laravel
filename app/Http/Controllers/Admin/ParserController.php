<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Source;
use App\Queries\NewsQueryBuilder;
use App\Services\Contracts\Parser;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ParserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $sources = Source::all();
        return view('admin.parser.index', [
            'sources' => $sources
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Parser $parser, NewsQueryBuilder $builder)
    {
        $source = Source::find($request->input('source_id'));
        $data = $parser->setLink($source['link'])->getParseData();
        $news = $data['news'];
        foreach ($news as $item) {
            $builder->create([
                'category_id' => $source['category_id'],
                'source_id' => $source['id'],
                'title' => $item['title'],
                'link' => $item['link'],
                'description' => $item['description'],
                'created_at' => $item['pubDate']
            ]);
        }
        dd($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
