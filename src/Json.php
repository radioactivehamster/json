<?php

namespace RadHam;

use RuntimeException;
use SplFileInfo;

class Json
{
    public function parseFile($filename)
    {
        $file = new SplFileInfo($filename);

        if (!$file->isFile()) {
            throw new RuntimeException('Invalid filename supplied for `RadHam\Json::parseFile()`');
        }

        $contents = file_get_contents($file->getPathname());

        return json_decode($contents);
    }

    public function writeFile($filename, $data)
    {
        $json = json_encode($data, JSON_PRETTY_PRINT) . PHP_EOL;

        return (file_put_contents($filename, $json)) ? $json : false;
    }
}
