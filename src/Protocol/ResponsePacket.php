<?php
namespace Lum\Server\Protocol;

/**
 * Interface ResponsePacket
 *
 * @package Lum\Server\Protocol
 */
interface ResponsePacket
{
    /**
     * @return ResponseHeader|null
     */
    public function getResponseHeader() : ?ResponseHeader;

    /**
     * @return ResponseBody|null
     */
    public function getResponseBody() : ?ResponseBody;

    /**
     * @return string
     */
    public function __toString() : string;
}