<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sources\CreateRequest;
use App\Http\Requests\Sources\EditRequest;
use App\Models\Source;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $sources = Source::select(Source::$selectedFields)->paginate();
        return view('admin.sources.index', [
            'sources' => $sources
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.sources.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateRequest  $request
     * @return RedirectResponse
     */
    public function store(CreateRequest $request): RedirectResponse
    {
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
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Source $source
     * @return View
     */
    public function edit(Source $source): View
    {
        return view('admin.sources.edit', ['source'=>$source]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  EditRequest  $request
     * @param  Source $source
     * @return RedirectResponse
     */
    public function update(EditRequest $request, Source $source): RedirectResponse
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
     * @return JsonResponse
     */
    public function destroy(Source $source): JsonResponse
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
