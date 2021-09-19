<?php 
/*阅读的具体链接*/
	/*包含基本的配置文件*/
	include('config.php');
	/*强制转换传来的文章pid*/
	$pid=(int)$input->get('pid');
	/*pid小于1 无效文章*/
	if($pid<1){
		die('无效文章');
	}
	$sql="select * from page where pid='{$pid}' ";
	$blog=$db->query($sql)->fetch_array(MYSQLI_ASSOC);
?>

<!--阅读界面<>/!-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"> 
	<title><?php echo $setting['title'];?></title>
	<?php include(PATH . '/header.inc.php');?>  <!--所有的页面都需加载这个文件></!-->

	<script type="text/javascript">
	function tishi()
  {

  var t=prompt("请输入您的名字","BLOG评论")
  if (t!=null && t!="")
    {
    document.write("提交成功，请继续浏览")
    }
  }
</script>
</head>
<body>
	<div class='container'>
			<div class="jumbotron">
				<h2><a href="index.php"><?php echo $setting['title'];?></a></h2>
				<p><?php echo $setting['intro'];?></p>
			</div>
				<!--导航条></!-->
				<ol class="breadcrumb">
				  <li><a href="index.php">首页</a></li>
				  <li><?php echo $blog['title'];?></li>
				</ol>
			<div class="col-md-3">

				
				<div class="panel panel-default">
				  <div class="panel-heading" >  <h3><?php echo $setting['title'];?></h3> </div>
				  <div class="panel-body">
				  	<div style="text-indent:2em;"><p><?php echo $setting['intro'];?></p></div>
				  </div>
				</div>

				<div class="panel panel-default">
				  <div class="panel-heading">词条统计</div>
				  <div class="panel-body" >	 
				       浏览次数：21次 <br>
				       编辑次数：5次历史版本 <br>
				       最近更新：2020-12-20 <br>	
				    
				  </div>
					
				</div>

			</div>

			<div class="col-md-9">
		
				<div class="panel panel-default">
				  <div class="panel-heading" style="text-indent:2em;">
				   	<?php echo $blog['title'];?>	
				  </div>
				  <div class="panel-body">
				  	 <?php echo $blog['content'];?>

				  </div>

				</div>
				<div>
			
						<p class="small">评论区</p>
						<form action="preserve_comment.php" method="post">
						<textarea id="texthelpblock" class="form-control" rows="4">
						</textarea>
						
						 <p class="text-left"><button type="button" class="btn btn-primary btn-xs">评论</button></p>

						<p class="text-right"><input type="button" onclick="tishi()" value="提交" /> </p>
						</div>
						<p id="article_id" class="hidden"><?php echo $article_id ?></p>
						</form>

					
　
            </div>	

	</div>

</body>
</html>