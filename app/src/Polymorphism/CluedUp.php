<?php
/**
 * Created by PhpStorm.
 * User: m_ast
 * Date: 26.11.2018
 * Time: 15:55
 */

namespace App\Polymorphism;

class CluedUp extends Employee
{
    function fire()
    {
        print "{$this->name}: call lawyer \n";
    }
}