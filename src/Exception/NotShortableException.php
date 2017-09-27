<?php

namespace yedincisenol\DynamicLinks\Exception;

use Throwable;

class NotShortableException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct('Cannot short a short link', 422, $previous);
    }
}