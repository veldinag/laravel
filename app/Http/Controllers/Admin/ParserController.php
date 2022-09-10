<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Source;
use App\Queries\NewsQueryBuilder;
use App\Services\Contracts\Parser;
use Illuminate\Http\RedirectResponse;
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
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request, Parser $parser, NewsQueryBuilder $builder): RedirectResponse
    {
        $source = Source::find($request->input('source_id'));
        $data = $parser->setLink($source['link'])->getParseData();
        $news = $data['news'];
        $news_added = $builder->addNews($news, $source['category_id'], $source['id']);
        if ($news_added > 0) {
            return redirect()->route('admin.parser.index', )
                ->with('success', __('messages.admin.parser.index.success', ['count_news' => $news_added]));
        }
        return redirect()->route('admin.parser.index', )
            ->with('error', __('messages.admin.parser.index.fail'));
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
