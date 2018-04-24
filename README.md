# Yii2依赖注入Demo

## 运行项目

1. composer install
2. ./yii serve/index

## 文件说明(命名空间)

1. controllers/UserController           用户控制器
2. app/services/UserService             用户业务接口
3. app/services/impl/UserServiceImpl    用户业务实现
4. config/web.php                       配置文件

## 访问

1. http://localhost:8080/user/all           用户列表
2. http://localhost:8080/user/show?id=1     查看一个用户

