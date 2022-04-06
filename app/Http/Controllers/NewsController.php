<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;

use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function index(int $categoryId): View
    {
        return view('news.index', [
            'newsList' => News::where('category_id', '=', $categoryId)->where('status', '=', 'ACTIVE')->get(),
            'category' => Category::select('id', 'title')->where('id', '=', $categoryId)->get()
        ]);
    }

    public function show(int $id): View
    {
        return view('news.show', [
            'news' => News::where('id', '=', $id)->get(),
        ]);
    }
}
