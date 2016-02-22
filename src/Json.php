<?php

namespace RadHam;

use RuntimeException;
use SplFileInfo;

class Json
{
    public function parseFile($filename)
    {
        $file     = new SplFileInfo($filename);
        $contents = file_get_contents($file->getPathname());

        return json_decode($contents);
    }
}
