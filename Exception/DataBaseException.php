<?php
namespace Exception;
use JetBrains\PhpStorm\Pure;

/**
 * Exception relative à la base de donnée
 */
class DataBaseException extends \Exception
{
    #[Pure] public function __construct(string $message = "")
    {
        parent::__construct($message);
    }
}