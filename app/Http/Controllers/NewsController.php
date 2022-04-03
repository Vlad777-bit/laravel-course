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
        $news     = app(News::class);
        $category = app(Category::class);

        return view('news.index', [
            'newsList' => $news->getNews($categoryId),
            'category' => $category->getCategoryById($categoryId),
        ]);
    }

    public function show(int $id): View
    {
        $news = app(News::class);

        return view('news.show', [
            'news' => $news->getNewsById($id),
        ]);
    }
}
