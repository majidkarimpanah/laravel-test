<?php
namespace App\Test;
use Illuminate\Support\Facades\Facade;

class FooFacade extends Facade {
    protected static function getFacadeAccessor()
    {
        return 'foo';
    }
}