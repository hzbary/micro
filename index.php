<?php
define('ROOT_PATH', str_replace('\\', '/', dirname(__FILE__)));  //定义根目录
/* 加载核心模块 */
require ROOT_PATH . '/config.php';  //主要设置
require ROOT_PATH . '/core/dispatcher.php';  //分发器模块
require ROOT_PATH . '/core/controller.php';  //加载控制器基类
require ROOT_PATH . '/core/model.php'; //加载模型类基类
require ROOT_PATH . '/core/view.php'; //加载视图类基类

$dpt = new Dispatcher();   //实例化请求分发器
$return_status = $dpt->run();

echo $return_status;

exit(0);


/* End of index.php */
/* Location /index.php */
