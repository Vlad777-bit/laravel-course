<?php

namespace App\Http\Controllers;

use App\Models\News;

use Illuminate\Http\Request;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    public function index(): View
    {
        return view('welcome', [
            'lastNews' => News::where('status', '=', 'ACTIVE')
                ->orderBy('created_at', 'desc')
                ->limit(3)
                ->get(),
        ]);
    }
}
