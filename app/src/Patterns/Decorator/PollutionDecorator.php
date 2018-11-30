<?php
/**
 * Created by PhpStorm.
 * User: m_ast
 * Date: 29.11.2018
 * Time: 16:28
 */

namespace App\Patterns\Decorator;


class PollutionDecorator extends TileDecorator
{
    public function getWealthFactor()
    {
        return $this->tile->getWealthFactor() - 4;
    }
}