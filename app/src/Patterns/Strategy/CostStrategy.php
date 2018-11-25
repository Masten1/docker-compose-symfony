<?php
/**
 * Created by PhpStorm.
 * User: dmytro
 * Date: 25.11.18
 * Time: 19:23
 */

namespace App\Patterns\Strategy;


abstract class CostStrategy
{
    abstract function cost(Lesson $lesson);

    abstract function chargeType();
}