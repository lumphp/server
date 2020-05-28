<?php
namespace Lum\Server\Protocol;

/**
 * Interface ResponseBody
 *
 * @package Lum\Server\Protocol
 */
interface ResponseBody extends Body
{
    /**
     * @return null|ResponseResult
     */
    public function getResult() : ?ResponseResult;
}