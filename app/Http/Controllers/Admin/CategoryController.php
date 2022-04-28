<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\Category\CreateRequest;
use App\Http\Requests\Category\EditRequest;
use App\Models\Category;

use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('admin.categories.index', [
            'categoriesList' => Category::orderBy('id', 'desc')->withCount('news')->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateRequest $request
     * @return RedirectResponse
     */
    public function store(CreateRequest $request): RedirectResponse
    {
        $newCategory = Category::create($request->validated());

        if(!$newCategory) {
            return back()->with('error', __('messages.admin.categories.create.fail'));
        }

        return redirect()->route('admin.categories.index')
            ->with('success', __('messages.admin.categories.create.success'));
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
     * @param Category $category
     * @return View
     */
    public function edit(Category $category): View
    {
        return view('admin.categories.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EditRequest $request
     * @param Category $category
     * @return RedirectResponse
     */
    public function update(EditRequest $request, Category $category): RedirectResponse
    {
        $status = $category->fill($request->validated())->save();

        if(!$status)
        {
            return back()->with('error', __('messages.admin.categories.update.fail'));
        }

        return redirect()->route('admin.categories.index')
            ->with('success', __('messages.admin.categories.update.success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return JsonResponse
     */
    public function destroy(Category $category): JsonResponse
    {
        try {
            $category->delete();

            return response()->json(['status' => 'ok']);
        } catch(Exception $e) {
            Log::error("Category wasn't delete");

            return response()->json(['status' => 'error'], 400);
        }
    }
}
