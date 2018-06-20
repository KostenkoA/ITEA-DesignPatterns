<?php

use App\DesignPatterns\Models\UserFactory;
use App\DesignPatterns\Models\User;
use App\DesignPatterns\Services\InMemoryCache;
use App\DesignPatterns\Services\NullCache;

require __DIR__ .'/../../vendor/autoload.php';
/*
$userFactory = new UserFactory();

$userFactory->createUser('test1@example.com');
$userFactory->createUser('test2@example.com');
$userFactory->createUser('test1@example.com');

var_dump($userFactory->createUser('test2@example.com'));
*/

$cache = new InMemoryCache();

$user = new User('test1@example.com', $cache);