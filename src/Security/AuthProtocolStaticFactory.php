<?php

namespace App\DesignPatterns\Security;


final class AuthProtocolStaticFactory
{
    public static function factory($version)
    {
        switch ($version){
            case AuthProtocolV1::TYPE:
                return new AuthProtocolV1();
            case AuthProtocolV2::TYPE:
                return new AuthProtocolV2();
        }
        throw new \LogicException('Unknown auth protocol');
    }

    //AbstractFactory

    public function creaeteAuthProtocolV1()
    {
        return new AuthProtocolV1();
    }

    public function createAuthProtocolV2()
    {
        return new AuthProtocolV2();
    }
}