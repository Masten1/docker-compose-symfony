<?php
/**
 * Created by PhpStorm.
 * User: m_ast
 * Date: 28.11.2018
 * Time: 18:38
 */

namespace App\Patterns\Composite;


abstract class Unit
{
    function addUnit(Unit $unit)
    {
        throw new UnitException(get_class($this) . " is leaves");
    }

    function removeUnit(Unit $unit)
    {
        throw new UnitException(get_class($this) . " is leaves");
    }

    abstract function bombardStrength();
}