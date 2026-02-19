<?php

namespace Screenmatch\Exception;

class NotaInvalidaException extends \InvalidArgumentException
{
    public function __construct() {
        parent::__construct("Nota deve ser entre 0 e 10.");
    }
}