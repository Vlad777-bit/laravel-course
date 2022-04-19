<?php

namespace App\Contracts;

interface IParser
{
    /**
     * @param string $url
     * @return IParser
     */
    function setUrl(string $url): self;

    /**
     * @return void
     */
    function saveNews(): void;
}
