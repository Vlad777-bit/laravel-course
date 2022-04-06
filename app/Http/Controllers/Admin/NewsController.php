<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\News;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
            'newsList' => News::with('category')->get(),
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
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'string'],
        ]);

        $news = News::create($request->only([
            'category_id', 'title', 'author',
            'image', 'status', 'description',
        ]));

        if(!$news) {
            return back()->with('error', 'Не удалось создать новость');
        }

        return redirect()->route('admin.news.index')
            ->with('success', 'Новость была успешно добавлена!');
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
     * @param Request $request
     * @param News $news
     * @return RedirectResponse
     */
    public function update(Request $request, News $news): RedirectResponse
    {
        $status = $news->fill($request->only([
            'category_id', 'title', 'author',
            'image', 'status', 'description',
        ]))->save();

//        dd($request->all());

        if(!$status) {
            return back()->with('error', 'Не удалось обновит запись');
        }

        return redirect()->route('admin.news.index')
            ->with('success', 'Запись была успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
