<?php
@require_once("config.php"); 
$username = $_GET["username"];
$userpwd  = $_GET["userpwd"];


$str = "select  *  from  userinfo where username='$username' or usertel = '$username'";

$result = mysql_query($str);

$item = mysql_fetch_array($result); //获取了该对象

$obj = array(); //{}
if ($item) {
    $existPwd = $item["userpwd"];
    if ($existPwd == $userpwd) {
        $obj["code"] = 1;
        $obj["msg"] = "登陆成功";
        $obj["id"] = $item["id"];
    } else {
        $obj["code"] = 0;
        $obj["msg"] = "用户名和密码不匹配";
    }
} else {
    $obj["code"] = 0;
    $obj["msg"] = "用户名不存在";
}
echo json_encode($obj);
 