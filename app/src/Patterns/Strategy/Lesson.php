<?php
/**
 * Created by PhpStorm.
 * User: dmytro
 * Date: 25.11.18
 * Time: 19:22
 */

namespace App\Patterns\Strategy;


abstract class Lesson
{
    private $duration;
    private $costStrategy;

    function __construct($duration, CostStrategy $costStrategy)
    {
        $this->duration = $duration;
        $this->costStrategy = $costStrategy;
    }

    function cost()
    {
        return $this->costStrategy->cost($this);
    }

    function chargeType()
    {
        return $this->costStrategy->chargeType();
    }

    function getDuration()
    {
        return $this->duration;
    }
}