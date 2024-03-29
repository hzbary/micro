<?php
/**
*   控制器基类
*/
class Controller
{
	protected $view = NULL;
	protected $model = NULL;

	function __construct()
	{
		//默认实例化Controller时就实例化View
		$this->view = new View();
	}

	//用户通过model_name来手动载入相应的模型
	protected function load_model($model_name)
	{
		$model_file_name = ROOT_PATH . '/model/' . strtolower($model_name) . '.php';
		require_once($model_file_name);
		$this->model = new $model_name();
	}
}



/* End of controoler.php */
/* Location /core/controller.php */