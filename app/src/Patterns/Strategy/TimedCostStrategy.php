<?php
/**
 * Created by PhpStorm.
 * User: dmytro
 * Date: 25.11.18
 * Time: 19:28
 */

namespace App\Patterns\Strategy;


class TimedCostStrategy extends CostStrategy
{
    function cost(Lesson $lesson)
    {
        return ($lesson->getDuration() * 5);
    }

    function chargeType()
    {
        return "Pay by hour";
    }
}