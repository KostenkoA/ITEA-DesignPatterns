<?php

namespace App\DesignPatterns\Security;


abstract class AbstractAuthProtocol implements AuthProtocolInterface
{
    public function authenticate()
    {
        \var_dump(static::class . 'was called!');
    }
}