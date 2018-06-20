<?php

use App\DesignPatterns\Database\SqlQueryBuilder;

require __DIR__ . '/../../vendor/autoload.php';

$queryBuilder = new SqlQueryBuilder();

$queryBuilder->select('id, first_name');
$queryBuilder->from('user');
$queryBuilder->where('yers>30');

$query = $queryBuilder->getQuery();

var_dump($query);