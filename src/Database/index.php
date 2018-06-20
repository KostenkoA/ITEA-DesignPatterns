<?php

use App\DesignPatterns\Database\SqlQueryBuilder;

require __DIR__ . '/../../vendor/autoload.php';

$queryBuilder = new SqlQueryBuilder();
/*
$queryBuilder->select('id, first_name');
$queryBuilder->from('user');
$queryBuilder->where('years>30');

$query = $queryBuilder->getQuery();
*/

$query = $queryBuilder->select('id')
    ->from('user')
    ->where('years>30')
    ->getQuery();
var_dump($query);