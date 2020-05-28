<?php
namespace Lum\Server;

/**
 * Interface ClientRequest
 *
 * @package Lum\Server
 */
interface ClientRequest
{
    /**
     * @return string
     */
    public function __toString() : string;
}