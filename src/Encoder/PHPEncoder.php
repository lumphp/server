<?php
namespace Lum\Server\Encoder;

use Lum\Server\Encoder;

/**
 * Class PHPEncoder
 *
 * @package Lum\Server\Encoder
 */
final class PHPEncoder implements Encoder
{
    /**
     * @param string $content
     *
     * @return mixed
     */
    public function decode(string $content)
    {
        return unserialize($content);
    }

    /**
     * @param $data
     *
     * @return string
     */
    public function encode($data) : string
    {
        return serialize($data);
    }
}