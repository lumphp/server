<?php
namespace Lum\Server\Protocol;

/**
 * Interface Header
 *
 * @package Lum\Server\Protocol
 */
interface Header
{
    /**
     * @return string
     */
    public function __toString() : string;
}