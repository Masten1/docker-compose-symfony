<?php
/**
 * Created by PhpStorm.
 * User: m_ast
 * Date: 26.11.2018
 * Time: 15:53
 */

namespace App\Polymorphism;


abstract class Employee
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract function fire();
}