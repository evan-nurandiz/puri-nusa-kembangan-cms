<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

class GeneralHelpers {
    public function GenerateSlug($text) {
        return str_replace(" ","-",$text);
    }

    function object_to_array($object) {
        return (array) $object;
    }
}

?>