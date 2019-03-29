<?php

namespace App;

use Illuminate\Support\Facades\Facade;

class MyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return MyRootClass::class;
    }
}
