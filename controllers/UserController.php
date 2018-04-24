<?php
/**
 * Created by PhpStorm.
 * User: xialei
 * Date: 2018/4/24
 * Time: 下午10:57
 */

namespace app\controllers;


use app\services\UserService;
use yii\base\Module;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class UserController extends Controller
{
    private $userService;

    public function __construct(string $id, Module $module, UserService $userService, array $config = [])
    {
        $this->userService = $userService;
        parent::__construct($id, $module, $config);
    }

    /**
     * 查看用户
     * @param $id
     * @return array|null
     * @throws NotFoundHttpException
     */
    public function actionShow($id)
    {
        $user = $this->userService->show($id);
        if (empty($user)) {
            throw new NotFoundHttpException('用户不存在');
        }
        return $user;
    }

    /**
     * 查看所有用户
     * @return array
     */
    public function actionAll()
    {
        return $this->userService->all();
    }
}