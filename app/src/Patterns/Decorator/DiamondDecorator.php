<?php
/**
 * Created by PhpStorm.
 * User: m_ast
 * Date: 29.11.2018
 * Time: 14:58
 */

namespace App\Patterns\Decorator;


class DiamondDecorator extends TileDecorator
{
    public function getWealthFactor()
    {
        return $this->tile->getWealthFactor() + 2;
    }
}