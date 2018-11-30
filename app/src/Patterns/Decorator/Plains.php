<?php
/**
 * Created by PhpStorm.
 * User: m_ast
 * Date: 29.11.2018
 * Time: 13:34
 */

namespace App\Patterns\Decorator;


class Plains extends Tile
{
    private $wealthFactor = 2;

    public function getWealthFactor()
    {
        return $this->wealthFactor;
    }
}