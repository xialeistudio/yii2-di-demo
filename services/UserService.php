<?php
/**
 * Created by PhpStorm.
 * User: xialei
 * Date: 2018/4/24
 * Time: 下午10:55
 */

namespace app\services;

/**
 * 用户业务类
 * Interface UserService
 * @package app\services
 */
interface UserService
{
    /**
     * 根据ID查询用户
     * @param integer $id
     * @return array|null
     */
    public function show($id);

    /**
     * 查看所有用户
     * @return array
     */
    public function all();
}