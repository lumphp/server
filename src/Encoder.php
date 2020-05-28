<?php
namespace Lum\Server;

/**
 * Interface Encoder
 *
 * @package Lum\Server
 */
interface Encoder
{
    /**
     * @param $data
     *
     * @return string
     */
    public function encode($data) : string;

    /**
     * @param string $data
     *
     * @return mixed
     */
    public function decode(string $data);
}