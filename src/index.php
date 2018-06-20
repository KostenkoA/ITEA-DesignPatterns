<?php

use App\DesignPatterns\Security\AuthProtocolStaticFactory;

require_once __DIR__ . '/../vendor/autoload.php';


$v1 = AuthProtocolStaticFactory::factory('AUTH-V1');
$v1->authenticate();

$v2 = AuthProtocolStaticFactory::factory('AUTH-V2');
$v2->authenticate();

$v3 = new AuthProtocolStaticFactory();
var_dump($v3->creaeteAuthProtocolV1());
