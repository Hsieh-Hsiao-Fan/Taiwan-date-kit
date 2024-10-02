<?php

namespace Fan\Transfer;

use Illuminate\Support\Facades\Facade;

class TaiwanDateKit extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'fan.taiwanDateKit';
    }
}
