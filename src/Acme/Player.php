<?php  namespace Acme;

/**
 * Class Player
 * @package Acme
 */
class Player {
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $points;

    /**
     * @param $name
     * @param $points
     */
    public function __construct($name, $points)
    {
        $this->name = $name;
        $this->points = $points;
    }

    /**
     * @param $points
     */
    public function earnPoints($points)
    {
        $this->points = $points;
    }
}