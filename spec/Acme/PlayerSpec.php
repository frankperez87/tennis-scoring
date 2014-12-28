<?php

namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PlayerSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('Player 1', 0);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\Player');
    }

    function it_has_a_name()
    {
        $this->name->shouldBe('Player 1');
    }

    function it_has_its_points_defaulted_to_zero()
    {
        $this->points->shouldEqual(0);
    }

    function it_can_earn_points()
    {
        $this->earnPoints(3);
        $this->points->shouldEqual(3);
    }
}
