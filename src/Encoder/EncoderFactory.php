<?php
namespace Lum\Server\Encoder;

use Lum\Server\Encoder;
use Lum\Server\Exception\EncodeException;

/**
 * Class EncoderFactory
 *
 * @package Lum\Server\Encoder
 */
class EncoderFactory
{
    const JSON = 'JSON';
    const PHP = 'PHP';
    const MSG_PACK = 'MsgPack';

    /**
     * Create encoder.
     *
     * @param string $name
     *
     * @return Encoder
     * @throws EncodeException
     */
    public static function createEncoder(string $name) : Encoder
    {
        $className = sprintf('\\Lum\\Server\\Encoder\\%sEncoder', $name);
        if (!class_exists($className, true)) {
            throw new EncodeException(sprintf('Not found encoder of %s', $name));
        }

        return new $className;
    }
}