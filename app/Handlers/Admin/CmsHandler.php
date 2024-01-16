<?php

namespace App\Handlers\Admin;

use App\Models\Feedback;
use App\Models\WebContent;

class CmsHandler{

    protected $web_contents;
    
    public function __construct(WebContent $webContents)
    {
        $this->web_contents = $webContents;
    }

    public function getContentBySection($section)
    {
        return $this->web_contents->where('section', $section)->first();
    }

    public function updateContentBySection($data, $section)
    {
        return $this->web_contents->where('section', $section)->update([
            'content' => json_encode($data)
        ]);
    }
}

?>