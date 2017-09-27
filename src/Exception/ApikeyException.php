<?php

namespace yedincisenol\DynamicLinks\Exception;

use Throwable;

class ApikeyException extends \Exception
{
    public function __construct($message = "Your apikey is wrong. Please re-check your api key", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, 400, $previous);
    }
}