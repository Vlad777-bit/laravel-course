<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\IParser;
use App\Http\Controllers\Controller;
use App\Jobs\NewsParser;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ParserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|ResponseFactory|Response
     */
    public function __invoke(Request $request, IParser $parser)
    {
//        dd($parser->setUrl('https://news.yandex.ru/gadgets.rss')
//            ->saveNews());
        $urls = [
//            'https://news.yandex.ru/auto.rss',
            'https://news.yandex.ru/auto_racing.rss',
            'https://news.yandex.ru/army.rss',
            'https://news.yandex.ru/gadgets.rss',
            'https://news.yandex.ru/index.rss',
//            'https://news.yandex.ru/martial_arts.rss',
            'https://news.yandex.ru/communal.rss',
            'https://news.yandex.ru/health.rss',
//            'https://news.yandex.ru/games.rss',
            'https://news.yandex.ru/internet.rss',
            'https://news.yandex.ru/cyber_sport.rss',
            'https://news.yandex.ru/movies.rss',
            'https://news.yandex.ru/cosmos.rss',
            'https://news.yandex.ru/culture.rss',
//            'https://news.yandex.ru/fire.rss',
            'https://news.yandex.ru/championsleague.rss',
//            'https://news.yandex.ru/music.rss',
            'https://news.yandex.ru/nhl.rss',
        ];

        foreach ($urls as $url) {
            dispatch(new NewsParser($url));
        }

        return response('Начался парсинг новостей');
    }
}
