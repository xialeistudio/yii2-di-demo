<?php
/**
 * Created by PhpStorm.
 * User: xialei
 * Date: 2018/4/24
 * Time: 下午10:56
 */

namespace app\services\impl;


use app\services\UserService;

class UserServiceImpl implements UserService
{
    private $users = [
        ['id' => 1, 'name' => 'xialei'],
        ['id' => 2, 'name' => 'zhangsan'],
    ];

    /**
     * 根据ID查询用户
     * @param integer $id
     * @return array
     */
    public function show($id)
    {
        foreach ($this->users as $user) {
            if ($user['id'] == $id) {
                return $user;
            }
        }
        return null;
    }

    /**
     * 查看所有用户
     * @return array
     */
    public function all()
    {
        return $this->users;
    }
}