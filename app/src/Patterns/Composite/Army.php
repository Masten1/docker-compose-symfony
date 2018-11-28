<?php
/**
 * Created by PhpStorm.
 * User: m_ast
 * Date: 28.11.2018
 * Time: 18:39
 */

namespace App\Patterns\Composite;


class Army extends Unit
{
    private $units = [];

    public function addUnit(Unit $unit)
    {
        if (in_array($unit, $this->units, true)) {
            return;
        }

        $this->units[] = $unit;
    }

    public function removeUnit(Unit $unit)
    {
        $this->units = array_udiff($this->units, [$unit], function ($a, $b) {
            return ($a === $b) ? 0 : 1;
        });
    }

    public function bombardStrength()
    {
        $ret = 0;

        foreach ($this->units as $unit) {
            $ret += $unit->bombardStrength();
        }

        return $ret;
    }
}