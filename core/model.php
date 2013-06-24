<?php
/**
* 模型类基类		
*/
class Model
{
	
	//数据库连接
	protected $link = NULL;

	function __construct()
	{
		$this->link = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASS);
		mysql_select_db(MYSQL_DB, $this->link);
		mysql_query("SET NAMES " . MYSQL_CHARSET);
	}

	//检查输入的sql语句， 过滤敏感字符
	private function _check($sql)
	{

		/* TODO: 此处添加对$sql的过滤 */

		return $sql;
	}

	//执行sql命令，成功返回结果集和TRUE，失败返回FALSE
	protected function query($sql)
	{
		return mysql_query($this->_check($sql));
	}

	//执行sql查询，返回结果数组，查询失败返回FALSE
	protected function fetch_array($sql)
	{
		$res = $this->query($sql);
		return mysql_fetch_array($res);
	}

	/* TODO: 添加其他的数据处理操作 */

}




/* End of model.php */
/* Location /core/model.php */