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
    public function getComposite()
    {
        return null;
    }

    abstract function bombardStrength();
}