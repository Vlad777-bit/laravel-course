<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\IParser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return void
     */
    public function __invoke(Request $request, IParser $parser)
    {
        dd($parser->setUrl('https://news.yandex.ru/movies.rss')
            ->getNews());
    }
}
