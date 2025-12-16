<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Article extends Component
{
    public $titre;
    public $description;

    /**
     * Create a new component instance.
     */
    public function __construct($titre = "IA",$description= "RAS")
    {
        $this->titre = $titre;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.article');
    }
}
