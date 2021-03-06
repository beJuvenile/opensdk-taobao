<?php
/**
 * 请求接口类
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/23
 * Time: 10:03
 */
namespace OpenSDK\TaoBao\Interfaces;


interface Request
{

    /**
     * 获取参数
     */
    public function getApiMethodName();

    public function getApiParas();

    public function check();

}