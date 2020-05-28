<?php
namespace Lum\Server\Exception;

use Exception;
use Throwable;

/**
 * Class EncodeException
 *
 * @package Lum\Server\Exception
 */
class EncodeException extends Exception
{
    /**
     * EncodeException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}