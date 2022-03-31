<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AboutController extends Controller
{
    public function index(): View
    {
        return view('about.index', [
            'commentsList' => $this->getComments()
        ]);
    }
}