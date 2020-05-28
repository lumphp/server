<?php
namespace Lum\Server\Protocol;

use Lum\Server\ClientRequest;

/**
 * Interface RequestBody
 *
 * @package Lum\Server\Protocol
 */
interface RequestBody extends Body
{
    /**
     * @return null|ClientRequest
     */
    public function getRequest() : ?ClientRequest;
}