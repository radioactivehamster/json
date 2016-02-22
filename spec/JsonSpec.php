<?php

namespace spec\RadHam;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use stdClass;

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
}
