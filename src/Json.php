<?php

namespace RadHam;

use RuntimeException;
use SplFileInfo;

class Json
{
    /**
     * Parse a JSON file into an object or array.
     *
     * @param string $filename
     * @return mixed
     * @throws RuntimeException
     */
    public function parseFile($filename)
    {
        $file = new SplFileInfo($filename);

        if (!$file->isFile()) {
            throw new RuntimeException('Invalid filename supplied for `RadHam\Json::parseFile()`');
        }

        $contents = file_get_contents($file->getPathname());

        return json_decode($contents);
    }

    /**
     * Write an object or array into a new JSON file.
     *
     * @param string $filename
     * @param mixed $data
     * @return bool|string
     */
    public function writeFile($filename, $data)
    {
        $json = json_encode($data, JSON_PRETTY_PRINT) . PHP_EOL;

        return (file_put_contents($filename, $json)) ? $json : false;
    }
}
