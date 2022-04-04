<?php

namespace App\Http\Controllers;

use App\Models\About;

use Illuminate\View\View;

class AboutController extends Controller
{
    public function index(): View
    {
        $comments = app(About::class);

        return view('about.index', [
            'commentsList' => $comments->getComments()
        ]);
    }
}
