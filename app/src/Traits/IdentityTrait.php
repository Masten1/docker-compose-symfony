<?php
/**
 * Created by PhpStorm.
 * User: dmytro
 * Date: 19.11.18
 * Time: 22:46
 */

namespace App\Traits;


trait IdentityTrait
{
    public function generateId()
    {
        return uniqid();
    }
}