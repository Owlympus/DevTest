<?php
/**
 * Created by PhpStorm.
 * User: Owlym
 * Date: 27/10/2018
 * Time: 14:56
 */

require __DIR__ . './src/autoload.php';

$user = new User();

$user
    ->setId(1)
    ->setFirstName('Yannick')
    ->setLastName('Dudziak')
    ->setEmail('yannick@sg-autorepondeur.com')
;

var_dump($user);
var_dump(serialize($user));