<?php
/**
 * Created by PhpStorm.
 * User: m_ast
 * Date: 29.11.2018
 * Time: 14:55
 */

namespace App\Patterns\Decorator;


abstract class TileDecorator extends Tile
{
    protected $tile;

    function __construct(Tile $tile)
    {
        $this->tile = $tile;
    }
}