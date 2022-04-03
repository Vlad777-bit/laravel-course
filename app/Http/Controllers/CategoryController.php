<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = app(Category::class);

        return view('categories.index', [
            'categoriesList' => $categories->getCategories(),
        ]);
    }
}
