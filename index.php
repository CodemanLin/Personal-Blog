<?php
/*主界面*/ 
	/*基本的配置文件*/
	include('config.php');
	/*从数据库读取最新10条的博客标题和内容*/
	$sql="select *from page order by pid desc limit 0,10";
	$result=$db->query($sql);
	
	$blogs=array();
	while($row=$result->fetch_array(MYSQLI_ASSOC)){
		$blogs[]=$row;
	}
	$conn = @mysqli_connect("127.0.0.1","root","","blog");
$conn or die('数据库服务器连接失败！系统错误信息为：'.mysqli_connect_error());
mysqli_select_db($conn, "stugrade") 
or die('打开数据库失败！系统错误信息为：'.mysqli_error($conn));
mysqli_query($conn, "set names utf8");
	$sql2="SELECT * FROM comment WHERE article_id = '$article_id'  ORDER BY create_time DESC";
	$comment_res =$db->query($sql2);

 ?>


<!doctype html>
<html>
<head>
 <meta charset="utf-8">
 <title>我的博客</title>
 <meta name="关键字" content="">
<link href="css/index.css" rel="stylesheet">
 <link href="css/buju.css" rel="stylesheet">
 <script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript" src="js/sliders.js"></script>
 

</head>
<body>
  <header>
    <div class="logo f_l">
	    <h1 class="biaoti"><?php echo $setting['title'];?></h1>
	 </div>

  </header>
  <article>
    <div class="l_box f_l">
	  <div class="banner">
	    <div id="slide-holder">
		   <div id="slide-runner">
		     <a href="/" target="_blank">
			     <img id="slide-img-1" src="images/001.jpg" alt style>
			  </a>
			  <a href="/" target="_blank">
			     <img id="slide-img-2" src="images/002.jpg" alt style>
			  </a>
			  <a href="/" target="_blank">
			     <img id="slide-img-3" src="images/003.jpg" alt style>
			  </a>
			  <a href="/" target="_blank">
			     <img id="slide-img-4" src="images/004.jpg" alt style>
			  </a>
			  <div id="slide-controls" style="display:block;">
			    <p id="slide-client" class="text">
				    <strong></strong>
					 <span></span>
				 </p>
              <p id="slide-desc" class="text"></p> 	
              <p id="slide-nav"></p>		     			  
			  </div>
		   </div> 
		 </div>
	  </div>
	  <script>
	     if(!window.slider){
		     var slider={};
		 }
		 slider.data=[
		 {
		     "id":"slide-img-1", //与slide-runner中的img标签id对应
			 "client":"古城",
		 },
		 {
		     "id":"slide-img-2", 
			 "client":"老树",
		 },
		 {
		     "id":"slide-img-3", 
			 "client":"雪景",
		 },
		 {
		     "id":"slide-img-4", 
			 "client":"美女",
		 }
		 ];
	   </script>
	   <div class="topnews">
	   <h2>
	   <span>  
		<a href="/" target="_blank">分类：</a>
	    <a href="/" target="_blank">HTML</a>
		 <a href="/" target="_blank">PHP</a>
		 <a href="/" target="_blank">工具</a>
	   </span>	 
	    文章推荐
	   </h2>
	     <div class="blogs">
		      <figure>
			     <img src="images/01.jpg">
			   </figure>
			   <ul>
			     <h3><a href="read.php?pid=<?php echo $blogs[0]['pid'];?>"><?php echo $blogs[0]['title'];?></a></h3>
				  <p><?php echo mb_substr(strip_tags($blogs[0]['content']),0,80);?> ......</p>
			     <p class="autor">
				    <span class="lm f_l">
					    <a href="/">个人博客</a>
					 </span>
					 <span class="dtime f_l">2020-08-20</span>
					 <span class="viewnum f_r">
					    浏览（<a href="/">666</a>）</span>
					 <span class="pingl f_r">	
			

				  </p>
			   </ul>
	       </div>
		 
		  <div class="blogs">
		     <figure>
			     <img src="images/03.jpg">
			   </figure>
			   <ul>
			      <h3><a href="read.php?pid=<?php echo $blogs[2]['pid'];?>"><?php echo $blogs[2]['title'];?></a></h3>
				  <p><?php echo mb_substr(strip_tags($blogs[2]['content']),0,80);?> ......</p>
			     <p class="autor">
				    <span class="lm f_l">
					    <a href="/">个人博客</a>
					 </span>
					 <span class="dtime f_l">2020-06-20</span>
					 <span class="viewnum f_r">
					    浏览（<a href="/">666</a>）</span>
					 <span class="pingl f_r">	
					    评论（<a href="/">60</a>）</span>
				  </p>
			   </ul>
	       </div>
	   
		  <div class="blogs">
		       <figure>
			     <img src="images/05.jpg">
			   </figure>
			   <ul>
			      <h3><a href="read.php?pid=<?php echo $blogs[5]['pid'];?>"><?php echo $blogs[5]['title'];?></a></h3>
				  <p><?php echo mb_substr(strip_tags($blogs[5]['content']),0,80);?> ......</p>
			     <p class="autor">
				    <span class="lm f_l">
					    <a href="/">个人博客</a>
					 </span>
					 <span class="dtime f_l">2020-06-20</span>
					 <span class="viewnum f_r">
					    浏览（<a href="/">666</a>）</span>
					 <span class="pingl f_r">	
					    评论（<a href="/">60</a>）</span>
				  </p>
			   </ul>
	        </div>
		  <div class="blogs">
		       <figure>
			     <img src="images/06.jpg">
			   </figure>
			   <ul>
			     <h3><a href="read.php?pid=<?php echo $blogs[6]['pid'];?>"><?php echo $blogs[6]['title'];?></a></h3>
				  <p><?php echo mb_substr(strip_tags($blogs[6]['content']),0,80);?> ......</p>
			     <p class="autor">
				    <span class="lm f_l">
					    <a href="/">个人博客</a>
					 </span>
					 <span class="dtime f_l">2020-06-20</span>
					 <span class="viewnum f_r">
					    浏览（<a href="/">666</a>）</span>
					 <span class="pingl f_r">	
					    评论（<a href="/">60</a>）</span>
				  </p>
			   </ul>
	        </div>
	   </div>
	 </div>  
    <div class="r_box f_r">
	   <div class="tit01">
         <h3>关注我</h3>
		  <div class="gzwm">
		    <ul>
			   <li><a class="xlwb" href="#" target="_blank">新浪微博</a></li>
			   <li><a class="txwb" href="#" target="_blank">腾讯微博</a></li>
			   <li><a class="rss" href="#" target="_blank">RSS</a></li>
			   <li><a class="wx" href="#" target="_blank">邮箱</a></li>
			</ul>
		  </div>
       </div> 
	   <div class="tab" id="lp_right_select">
	     <script>
		     window.onload=function()
			 {
			     var oLi=document.getElementById("tb").getElementsByTagName("li");
				 var oUl=document.getElementById("tb-main").getElementsByTagName("div");
				 for(var i=0;i<oLi.length;i++)
				 {
				     oLi[i].index=i;
					 oLi[i].onmouseover=function()
					 {
					    for(var n=0;n<oLi.length;n++)
						    oLi[n].className="";
							this.className="cur";
						for(var n=0;n<oUl.length;n++)
                            oUl[n].style.display="none";
                            oUl[this.index].style.display="block";							
					 }
				 }
			 }
		  </script>
	     <div class="tab-top">
		      <ul class="hd" id="tb">
			       <li class="cur"><a href="/">点击排行</a></li>
				   <li><a href="/">最新文章</a></li>
				   <li><a href="/">站长推荐</a></li>
			  </ul>
		  </div>
		  <div class="tab-main" id="tb-main">
		      <div class="bd bd-news" style="display:block;"><ul>
				
				<?php foreach($blogs as $blog):?>
				  <li>
					  <a href="read.php?pid=<?php echo $blog['pid'];?>"><?php echo $blog['title'];?></li>
				<?php endforeach;?>
			      
			  </ul></div>
			   <div class="bd bd-news" ><ul>
				   <li> 
					   <a href="read.php?pid=<?php echo $blogs[5]['pid'];?>"><?php echo $blogs[5]['title'];?>
					   </li>
				   <li><a href="read.php?pid=<?php echo $blogs[4]['pid'];?>"><?php echo $blogs[4]['title'];?></li>
				   <li><a href="read.php?pid=<?php echo $blogs[3]['pid'];?>"><?php echo $blogs[3]['title'];?></li>
				   <li><a href="read.php?pid=<?php echo $blogs[1]['pid'];?>"><?php echo $blogs[5]['title'];?></li>
				   <li><a href="read.php?pid=<?php echo $blogs[2]['pid'];?>"><?php echo $blogs[5]['title'];?></li>
				   <li><a href="read.php?pid=<?php echo $blogs[0]['pid'];?>"><?php echo $blogs[5]['title'];?></li>
			  </ul></div>
			   <div class="bd bd-news" ><ul>
			     <?php foreach($blogs as $blog):?>
				  <li>
					  <a href="read.php?pid=<?php echo $blog['pid'];?>"><?php echo $blog['title'];?></li>
				<?php endforeach;?>
			  </ul></div>
		  </div>
	   </div>
	   <div class="cloud">
	     <h3>标签云</h3>
		  <ul>
		    <li><a href="/">个人博客</a></li>
			 <li><a href="/">web开发</a></li>
			 <li><a href="/">前端设计</a></li>
			 <li><a href="/">Html</a></li>
			 <li><a href="/">CSS3</a></li>
			 <li><a href="/">CSS3+HTML5</a></li>
			 <li><a href="/">百度</a></li>
			 <li><a href="/">JavaScript</a></li>
			 <li><a href="/">C/C++</a></li>
			 <li><a href="/">ASP.NET</a></li>
			 <li><a href="/">IOS开发</a></li>
			 <li><a href="/">Android开发</a></li>
			 <li><a href="/">PHP</a></li>
			 <li><a href="/">VS</a></li>
		  </ul>
	   </div>
	   <div class="tuwen">
	     <h3>图文推荐</h3>
		 <ul>
		   <li><a href="/"><img src="images/01.jpg"><b><a href="read.php?pid=<?php echo $blogs[6]['pid'];?>"><?php echo $blogs[6]['title'];?></a></b></a>
		      <p>
			      <span class="tulanum"><a href="/">工具</a></span>
				   <span class="tutime">2020-06-20</span>
			   </p>
		   </li>
		   <li><a href="/"><img src="images/02.jpg"><b><a href="read.php?pid=<?php echo $blogs[6]['pid'];?>"><?php echo $blogs[1]['title'];?></a></b></a>
		      <p>
			      <span class="tulanum"><a href="/">工具</a></span>
				   <span class="tutime">2020-06-20</span>
			   </p></li>
		   <li><a href="/"><img src="images/03.jpg"><b><a href="read.php?pid=<?php echo $blogs[6]['pid'];?>"><?php echo $blogs[2]['title'];?></a></b></a>
		      <p>
			      <span class="tulanum"><a href="/">PHP</a></span>
				   <span class="tutime">2020-06-20</span>
			   </p></li>
		   <li><a href="/"><img src="images/06.jpg"><b><a href="read.php?pid=<?php echo $blogs[6]['pid'];?>"><?php echo $blogs[3]['title'];?></a></b></a>
		      <p>
			      <span class="tulanum"><a href="/">HTML</a></span>
				   <span class="tutime">2020-06-20</span>
			   </p></li>
		   <li><a href="/"><img src="images/006.jpg"><b><a href="read.php?pid=<?php echo $blogs[6]['pid'];?>"><?php echo $blogs[4]['title'];?></a></b></a>
		      <p>
			      <span class="tulanum"><a href="/">HTML</a></span>
				   <span class="tutime">2020-06-20</span>
			   </p></li>
		 </ul>
	   </div>
	   <div class="links">
	     <h3><span><a href="/">申请友情链接</a></span>友情链接</h3>
		 <ul>
		   <li><a href="https://www.csdn.net/">CSDN</a></li>
		    <li><a href="https://github.com/">Github</a></li>
			 <li><a href="https://www.runoob.com/">Runoob</a></li>
			  <li><a href="https://www.cnblogs.com/">博客园</a></li>
			   <li><a href="https://www.w3school.com.cn/">W3school</a></li>
			    
		 </ul>
	   </div>
	 </div>
  </article>
</body>
</html>