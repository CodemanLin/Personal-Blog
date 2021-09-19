 <?php

$conn = @mysqli_connect("127.0.0.1","root","","blog");
$conn or die('数据库服务器连接失败！系统错误信息为：'.mysqli_connect_error());
mysqli_select_db($conn, "stugrade") 
or die('打开数据库失败！系统错误信息为：'.mysqli_error($conn));
mysqli_query($conn, "set names utf8");

//通过$_POST来获取信息
$content = trim($_POST['content']);
//$content = "茂升";
//$create_time = trim($_POST['time']);//评论存入时间。
$create_time = date("D F d Y", time());//文章的生成时间;
$user_id = 7;//初期先这么写，后期添加登陆模块以后再修改
$article_id = trim($_POST['article_id']);
//$article_id = 21;

//将ajax传递过来的数据写入到TXT文件中，测试传递数据是否正确
//$myfile = fopen("newfile.txt", "w")
        //or die("Unable to open file!");
//fwrite($myfile, $content);
//fwrite($myfile, $article_id);
//fwrite($myfile, $create_time);

$sql =	" insert into comment(article_id,user_id,content,create_time)
					values('{$article_id}','{$user_id}','{$content}','{$create_time}')";
/*$insert_sql = sprintf("INSERT INTO comment 
                      (article_id, user_id, 
                      content, create_time) 
                      VALUES ('%s','%s', '%s', '%s');",
                      mysql_real_escape_string($article_id),
                      mysql_real_escape_string($user_id),
                      mysql_real_escape_string($content),
                      mysql_real_escape_string($create_time)
);	*/

//设置读写数据库的编码方式

//将读者评论数据插入到数据库中
/*mysql_query($insert_sql)
    or die(mysql_error());	*/
$set_result=$db->query($sql);

?>