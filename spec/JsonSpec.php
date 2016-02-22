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
        $control = (object) ['hello' => 'world'];
        $file    = __DIR__ . '/data/hello-world.json';

        $this::parseFile($file)->shouldBeLike($control);
    }

    function it_should_throw_a_runtime_exception_if_an_invalid_filename_is_supplied_to_parse_a_json_file()
    {
        $file = __DIR__ . '/data/not-a-real-json-file.json';

        $this->shouldThrow('\RuntimeException')->duringParseFile($file);
    }
}
