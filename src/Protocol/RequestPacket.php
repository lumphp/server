<?php
namespace Lum\Server\Protocol;

/**
 * Interface RequestPacket
 *
 * @package Lum\Server\Protocol
 */
interface RequestPacket
{
    /**
     * @return string
     */
    public function __toString() : string;
}