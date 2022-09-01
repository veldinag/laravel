<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\CreateRequest;
use App\Http\Requests\News\EditRequest;
use App\Models\Category;
use App\Models\News;
use App\Models\Source;
use App\Queries\NewsQueryBuilder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(NewsQueryBuilder $builder): View
    {
        return view('admin.news.index', [
            'newsList' => $builder->getNews()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $categories = Category::all();
        $sources = Source::all();
        return view('admin.news.create',[
            'categories' => $categories,
            'sources' => $sources
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateRequest $request
     * @param NewsQueryBuilder $builder
     * @return RedirectResponse
     */
    public function store(CreateRequest $request, NewsQueryBuilder $builder): RedirectResponse
    {
        $news = $builder->create(
            $request->validated()
        );
        if($news) {
            return redirect()->route('admin.news.index')
                ->with('success', 'News added successfully');
        }

        return back()->with('error', 'Error adding a news');
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
     * @return View
     */
    public function edit(News $news): View
    {
        $categories = Category::all();
        $sources = Source::all();
        return view('admin.news.edit', [
            'news' => $news,
            'categories' => $categories,
            'sources' => $sources
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EditRequest $request
     * @param News $news
     * @param NewsQueryBuilder $builder
     * @return RedirectResponse
     */
    public function update(EditRequest $request, News $news, NewsQueryBuilder $builder): RedirectResponse
    {
        if($builder->update($news, $request->validated())) {
            return redirect()->route('admin.news.index')
                ->with('success', 'News updated successfully');
        }

        return back()->with('error', 'Error updating a news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  News $news
     * @return RedirectResponse
     */
    public function destroy(News $news): RedirectResponse
    {
        if($news->delete()) {
            return redirect()->route('admin.news.index')
                ->with('success', 'News deleted successfully');
        }

        return back()->with('error', 'Error deleting a news');
    }
}
