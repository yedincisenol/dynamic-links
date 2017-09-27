<?php

namespace yedincisenol\DynamicLinks\Exception;

use Throwable;

class ConfigException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct('Please fill api_key in config', 422, $previous);
    }
}