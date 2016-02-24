<?php

namespace spec\RadHam;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class JsonSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('RadHam\Json');
    }

    function it_should_parse_a_json_file()
    {
        $control  = (object) ['hello' => 'world'];
        $filename = __DIR__ . '/data/hello-world.json';

        $this::parseFile($filename)->shouldBeLike($control);
    }

    function it_should_throw_a_runtime_exception_if_an_invalid_filename_is_supplied_to_parse_a_json_file()
    {
        $invalidFile = __DIR__ . '/data/not-a-real-json-file.json';

        $this->shouldThrow('\RuntimeException')->duringParseFile($invalidFile);
    }

    function it_should_write_an_object_to_a_json_file()
    {
        $object     = (object) ['hello' => 'world'];
        $dir        = __DIR__ . '/data/.tmp';
        $filename   = "{$dir}/my-hello-world.json";
        $control    = file_get_contents(__DIR__ . '/data/hello-world.json');

        if (!file_exists($dir)) {
            mkdir($dir);
        }

        $this::writeFile($filename, $object)->shouldBeLike($control);
    }

    function letGo()
    {
        $dir      = __DIR__ . '/data/.tmp';
        $filename = "{$dir}/my-hello-world.json";

        if (file_exists($filename)) {
            unlink($filename);
        }

        if (file_exists($dir)) {
            rmdir($dir);
        }
    }
}
