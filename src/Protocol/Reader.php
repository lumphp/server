<?php
namespace Lum\Server\Protocol;

/**
 * Interface RpcReader
 *
 * @package Lum\Server\Protocol
 */
interface Reader
{
    /**
     * @return RequestPacket|null
     */
    public function read() : ?RequestPacket;
}