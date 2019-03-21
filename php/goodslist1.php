<?php
@require_once("config.php");
$id =$_GET["id"];

$str = "select  *  from  goodsinfo where $id";

$result = mysql_query($str);

$list = array();

while ($item = mysql_fetch_array($result)) {
    $temp = array();
    $temp["id"] = $item["id"];
    $temp["goodsname"] = $item["goodsname"];
    $temp["goodsimg"] = $item["goodsimg"];
    $temp["goodsnum"] = $item["goodsnum"];
    $temp["goodsprice"] = $item["goodsprice"];
    $temp["goodsxiao"] = $item["goodsxiao"];
    $temp["goodsda"] = $item["goodsda"];
    $list[] = $temp;
}
echo  json_encode($list);

 ?>