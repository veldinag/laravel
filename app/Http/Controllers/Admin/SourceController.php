<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Source;
use Illuminate\Http\Request;

class SourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sources = Source::select(Source::$selectedFields)->paginate();
        return view('admin.sources.index', [
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
        return view('admin.sources.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:5', 'max:255']
        ]);

        $source = new Source(
            $request->only(['name', 'link'])
        );

        if ($source->save()) {
            return redirect()->route('admin.sources.index')
                ->with('success', 'Source added successfully');
        }

        return back()->with('error', 'Error adding a source');
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
     * @param  Source $source
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Source $source)
    {
        return view('admin.sources.edit', ['source'=>$source]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Source $source
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Source $source)
    {
        $source->name = $request->input('name');
        $source->link = $request->input('link');

        if ($source->save()) {
            return redirect()->route('admin.sources.index')
                ->with('success', 'Source updated successfully');
        }

        return back()->with('error', 'Error updating a source');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Source $source
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Source $source)
    {
        try {
            $deleted = $source->delete();
            if($deleted === false) {
                return response()->json('error', 400);
            }

            return response()->json('ok');
        } catch(\Exception $e) {
            \Log::error($e->getMessage());
            return response()->json('error', 400);
        }
    }
}
