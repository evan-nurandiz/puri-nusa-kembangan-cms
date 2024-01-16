<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class textInput extends Component
{
    public $inputName;
    public $labelName;
    public $placeHolder;
    public $inputValue;
    public $isImportant;

    /**
     * Create a new component instance.
     */
    public function __construct($inputName, $labelName, $placeHolder, $inputValue, $isImportant)
    {
        $this->inputName = $inputName;
        $this->labelName = $labelName;
        $this->placeHolder = $placeHolder;
        $this->inputValue = $inputValue;
        $this->isImportant = $isImportant;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.text-input');
    }
}
