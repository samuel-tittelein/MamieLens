<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class App extends Component
{
    public string $titre;
    /**
     * Create a new component instance.
     */
    public function __construct(?string $titre)
    {
        $this->titre = $titre ?? "sans titre";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.app');
    }
}
