<?php
  //设置json格式头部
  header('Content-type: application/json');
  //载入数据库文件
  require("data.php");
  $sql="select * from soul order by rand( ) limit 1";
  $row=mysql_fetch_assoc(mysql_query($sql));
  //输出json
  echo json_encode(array('code'=>1,'data'=>$row['title']));
?>		
