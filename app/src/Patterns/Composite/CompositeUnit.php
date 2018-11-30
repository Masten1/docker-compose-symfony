<?php
/**
 * Created by PhpStorm.
 * User: m_ast
 * Date: 29.11.2018
 * Time: 11:23
 */

namespace App\Patterns\Composite;


abstract class CompositeUnit extends Unit
{
    private $units = [];

    public function getComposite()
    {
        return $this;
    }

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

    protected function units()
    {
        return $this->units;
    }
}