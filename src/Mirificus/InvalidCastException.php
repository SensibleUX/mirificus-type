<?php

/**
 * @package Mirificus
 */
namespace Mirificus;

/**
 * The exception that is thrown by Type::Cast
 * if an invalid cast is performed.  InvalidCastException
 * derives from CallerException, and therefore should be handled
 * similar to how CallerExceptions are handled (e.g. IncrementOffset should
 * be called whenever an InvalidCastException is caught and rethrown).
 * @package Mirificus\InvalidCastException
 */
class InvalidCastException extends CallerException
{
    public function __construct($strMessage, $intOffset = 2)
    {
        parent::__construct($strMessage, $intOffset);
    }
}