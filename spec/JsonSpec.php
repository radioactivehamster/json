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
}
