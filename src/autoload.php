<?php
/**
 * Created by PhpStorm.
 * User: Owlym
 * Date: 27/10/2018
 * Time: 14:59
 */

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});