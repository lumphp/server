<?php
namespace Lum\Server\Encoder;

use Lum\Server\Encoder;

/**
 * Class JSONEncoder
 *
 * @package Lum\Server\Encoder
 */
final class JSONEncoder implements Encoder
{
    /**
     * @param string $content
     *
     * @return mixed
     */
    public function decode(string $content)
    {
        return json_decode($content, true);
    }

    /**
     * @param $data
     *
     * @return string
     */
    public function encode($data) : string
    {
        return json_encode($data);
    }
}