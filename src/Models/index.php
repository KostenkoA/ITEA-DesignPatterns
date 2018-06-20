<?php

use App\DesignPatterns\Models\UserFactory;

require __DIR__ .'/../../vendor/autoload.php';

$userFactory = new UserFactory();

$userFactory->createUser('test1@example.com');
$userFactory->createUser('test2@example.com');
$userFactory->createUser('test1@example.com');

var_dump($userFactory->createUser('test2@example.com'));
