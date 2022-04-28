<?php

declare(strict_types=1);

namespace App\View\Components;

use http\Encoding\Stream;
use Illuminate\View\Component;
use Illuminate\View\View;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $type,
        public string $message,
    ) {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('components.alert');
    }
}
