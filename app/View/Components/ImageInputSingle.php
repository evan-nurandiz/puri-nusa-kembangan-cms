<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ImageInputSingle extends Component
{

    public $inputName;
    public $labelName;
    public $previewId;
    public $inputId;
    public $filenameLabel;
    public $fileImagePreview;

    /**
     * Create a new component instance.
     */
    public function __construct($inputName, $labelName, $previewId, $inputId, $filenameLabel, $fileImagePreview)
    {
        $this->inputName = $inputName;
        $this->labelName = $labelName;
        $this->previewId = $previewId;
        $this->inputId = $inputId;
        $this->filenameLabel = $filenameLabel;
        $this->fileImagePreview = $fileImagePreview;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.image-input-single');
    }
}
