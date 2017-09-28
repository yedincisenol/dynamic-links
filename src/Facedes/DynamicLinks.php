<?php

namespace yedincisenol\DynamicLinks\Facedes;

use Illuminate\Support\Facades\Facade;

class DynamicLinks extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'DynamicLinks';
    }
}