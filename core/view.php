<?php
/**
*  视图类基类	
*/
class View
{
	
	function __construct()
	{}

	public function show($view_file, $data = array())
	{
		$view_file_name = ROOT_PATH . '/view/' . strtolower($view_file) . '.php';
		if ( ! file_exists($view_file_name)) return FALSE;

		//把数组展开，键名做变量名，键值做变量值
		extract($data);

		//引入view文件
		include($view_file_name);
		return TRUE;
	}
}



/* End of view.php */
/* Location /core/view.php */