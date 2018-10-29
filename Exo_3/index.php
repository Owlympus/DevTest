<?php

$data = file_get_contents('./data/users.json');

$users = json_decode($data, 1);

for($i = 1; $i < count($users); $i++)
{
    var_dump($users[$i]);

    $userLoaded = new User();
    $userLoaded
        ->setId($i)
        ->setEmail($users[$i]['email'])
        ->setFirstName($users[$i]['first_name'])
        ->setUsername($users[$i]['username'])
        ->setLastName($users[$i]['last_name'])
        ->setBirthDate($users[$i]['birth_date'])
        ->setSubscription($users[$i]['subscription'])
    ;
}