<?php
namespace Lum\Server\Protocol;

use Lum\Server\ServerResponse;

/**
 * Interface Writer
 *
 * @package Lum\Server\Protocol
 */
interface Writer {
    /**
     * @param ServerResponse|null $response
     *
     * @return mixed
     */
    public function write(?ServerResponse $response);
}