<?php
/*后台管理都要执行的文件*/
	session_start();
	/*启动sesssion*/
	
	/*包含一个配置文件*/
	include('../config.php');
 
 	$session_aid=$input->session('aid');

	/*调用input输入类的session方法，来验证管理员账户是否已登录*/
	if($session_aid === false){
		/*返回login.php文件*/
		
		header("location:login.php");
	}
		
	/*取出登录成功的用户名*/
	$sql="select * from admin where aid='{$session_aid}'";
	$session_auser_result=$db->query($sql);
	$session_user=$session_auser_result->fetch_array( MYSQLI_ASSOC );

?>