<?php


namespace App\Exceptions;


use Exception;
use ReflectionException;

class RepositoryException extends Exception
{

    /**
     * RepositoryException constructor.
     * @param string $message
     * @throws Exception
     */
    public function __construct($message)
    {
        throw new ReflectionException($message);
    }
}
