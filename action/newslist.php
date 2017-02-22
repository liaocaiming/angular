<?php
//连接数据库
$conn=mysql_connect('localhost','root',121212);
//选择数据库
mysql_select_db('ag',$conn);
//支持中文
mysql_query('SET NAMES UTF8');
$sql="SELECT * FROM nlist";
$result=mysql_query($sql);
$data=array();
while($row=mysql_fetch_assoc($result)){
	$data[] =$row;
}
// $data = array(
// 	array(
// 		"id" => 1,
// 		"title" => "爱创课堂新闻1",
// 		"writer" => "小名1",
// 		"date" => 1455808822088,
// 		"content" => "爱创课堂新闻内容1"
// 	),
// 	array(
// 		"id" => 2,
// 		"title" => "爱创课堂新闻2",
// 		"writer" => "小名2",
// 		"date" => 1455808822088,
// 		"content" => "爱创课堂新闻内容2"
// 	),
// 	array(
// 		"id" => 3,
// 		"title" => "爱创课堂新闻3",
// 		"writer" => "小名3",
// 		"date" => 1455808822088,
// 		"content" => "爱创课堂新闻内容3"
// 	),
// 	array(
// 		"id" => 4,
// 		"title" => "爱创课堂新闻4",
// 		"writer" => "小名4",
// 		"date" => 1455808822088,
// 		"content" => "爱创课堂新闻内容4"
// 	),
// 	array(
// 		"id" => 5,
// 		"title" => "爱创课堂新闻5",
// 		"writer" => "小名5",
// 		"date" => 1455808822088,
// 		"content" => "爱创课堂新闻内容5"
// 	)
// );
// $result = array(
// 	"errno" => 0,
// 	"data" => $data
// );
echo json_encode($data);
?>