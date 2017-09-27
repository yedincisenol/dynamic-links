<?php

namespace yedincisenol\DynamicLinks\Exception;

use Throwable;

class InvalidArgumentException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, 400, $previous);
    }
}