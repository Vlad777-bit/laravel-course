<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\News\CreateRequest;
use App\Http\Requests\News\EditRequest;
use App\Models\Category;
use App\Models\News;

use App\Services\UploadService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('admin.news.index', [
            'newsList' => News::orderBy('id', 'desc')->with('category')->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.news.create', [
            'categoriesList' => Category::select('id', 'title')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateRequest $request
     * @return RedirectResponse
     */
    public function store(CreateRequest $request): RedirectResponse
    {
        $news = News::create($request->validated());

        if(!$news) {
            return back()->with('error', __('messages.admin.news.create.fail'));
        }

        return redirect()->route('admin.news.index')
            ->with('success', __('messages.admin.news.create.success'));
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
     * @param News $news
     * @return View
     */
    public function edit(News $news): View
    {
        return view('admin.news.edit', [
            'news' => $news,
            'categories' => Category::select('id', 'title')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EditRequest $request
     * @param News $news
     * @return RedirectResponse
     */
    public function update(EditRequest $request, News $news): RedirectResponse
    {
        $validatedData = $request->validated();

        if($request->hasFile('image')) {
            $service = app(UploadService::class);
            $validatedData['image'] = $service->uploadFile($request->file('image'));
        }

        $status = $news->fill($validatedData)->save();

        if(!$status) {
            return back()->with('error', __('messages.admin.news.update.fail'));
        }

        return redirect()->route('admin.news.index')
            ->with('success', __('messages.admin.news.update.success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return JsonResponse
     */
    public function destroy(News $news): JsonResponse
    {
        try {
            $news->delete();

            return response()->json(['status' => 'ok']);
        } catch(Exception $e) {
            Log::error("News wasn't delete");

            return response()->json(['status' => 'error'], 400);
        }
    }
}
