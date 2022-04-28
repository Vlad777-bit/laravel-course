<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;
use Illuminate\View\View;

class Button extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public ?string $type,
        public string $cssClass,
    )
    {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('components.ui.button');
    }
}
