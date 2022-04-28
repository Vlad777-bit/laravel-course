<?php

namespace App\Services;

use App\Contracts\IParser;

use Illuminate\Support\Facades\Storage;
use Orchestra\Parser\Xml\Facade as Parser;


class ParserService implements IParser
{

    protected string $url;

    /**
     * @param string $url
     * @return ParserService
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return void
     */
    public function saveNews(): void
    {
        $xml = Parser::load($this->url);

        $parsedNews = $xml->parse([
            'title' => [
                'uses' => 'channel.title'
            ],

            'link' => [
                'uses' => 'channel.link'
            ],

            'description' => [
                'uses' => 'channel.description'
            ],

            'image' => [
                'uses' => 'channel.image.url'
            ],

            'news' => [
                'uses' => 'channel.item[title,link,guid,description,pubDate]'
            ]
        ]);

        $json = json_encode($parsedNews);
        $e = explode("/", $this->url);
        $fileName = end($e);

        Storage::append('news/' . $fileName, $json);
    }
}
