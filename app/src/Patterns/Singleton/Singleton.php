<?php
/**
 * Created by PhpStorm.
 * User: m_ast
 * Date: 26.11.2018
 * Time: 18:49
 */

namespace App\Patterns\Singleton;


class Singleton
{
    private $props = [];
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    public function setProperty($key, $val)
    {
        $this->props[$key] = $val;
    }

    public function getProperty($key)
    {
        return $this->props[$key];
    }
}