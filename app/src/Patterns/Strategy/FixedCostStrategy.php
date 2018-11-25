<?php
/**
 * Created by PhpStorm.
 * User: dmytro
 * Date: 25.11.18
 * Time: 19:30
 */

namespace App\Patterns\Strategy;


class FixedCostStrategy extends CostStrategy
{
    function cost(Lesson $lesson)
    {
        return 30;
    }

    function chargeType()
    {
        return "fixed pay";
    }
}