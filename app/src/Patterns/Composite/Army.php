<?php
/**
 * Created by PhpStorm.
 * User: m_ast
 * Date: 28.11.2018
 * Time: 18:39
 */

namespace App\Patterns\Composite;


class Army extends CompositeUnit
{
    private $units = [];

    public function bombardStrength()
    {
        $ret = 0;

        foreach ($this->units as $unit) {
            $ret += $unit->bombardStrength();
        }

        return $ret;
    }
}