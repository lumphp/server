<?php
namespace Lum\Server\Encoder;

use Lum\Server\Encoder;

/**
 * Class MsgPackEncoder
 *
 * @package Lum\Server\Encoder
 */
final class MsgPackEncoder implements Encoder
{
    /**
     * @param string $content
     *
     * @return mixed
     */
    public function decode(string $content)
    {
        return msgpack_unpack($content);
    }

    /**
     * @param $data
     *
     * @return string
     */
    public function encode($data) : string
    {
        return msgpack_pack($data);
    }
}