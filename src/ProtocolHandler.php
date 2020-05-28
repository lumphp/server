<?php
namespace Lum\Server;

use Lum\Server\Protocol\Writer;

/**
 * Interface ProtocolHandler
 *
 * @package Lum\Server
 */
interface ProtocolHandler {
    /**
     * parse client request
     *
     * @param string $data
     *
     * @return null|Writer
     */
    public function handle(string $data) : ?Writer;
}