<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class IndexCard extends Component
{
    /**
     * Create a new component instance.
     */

    public $base;
    public $description;
    public $url;

    public function __construct($base, $description, $url)
    {
        $this->base = $base;
        $this->description = $description;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.index-card');
    }
}
