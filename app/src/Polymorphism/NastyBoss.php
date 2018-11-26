<?php
/**
 * Created by PhpStorm.
 * User: m_ast
 * Date: 26.11.2018
 * Time: 15:56
 */

namespace App\Polymorphism;


class NastyBoss
{
    private $employees = [];

    public function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    public function projectFails()
    {
        if (count($this->employees) > 0) {
            $emp = array_pop($this->employees);
            $emp->fire();
        }
    }
}