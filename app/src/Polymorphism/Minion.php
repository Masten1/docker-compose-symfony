<?php
/**
 * Created by PhpStorm.
 * User: m_ast
 * Date: 26.11.2018
 * Time: 15:54
 */

namespace App\Polymorphism;


class Minion extends Employee
{
    function fire()
    {
        print "{$this->name}: clear the table \n";
    }
}