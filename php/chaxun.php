<?php
@require_once("config.php");

$skipnum = $_GET["skipnum"];
$shownum = $_GET["shownum"];

$str="select * from goodsinfo limit  $skipnum,$shownum";

$result = mysql_query($str);

$list = array(); //集合

while ($item = mysql_fetch_array($result)) {
    $temp = array();
    $temp["id"] = $item["id"];
    $temp["goodsname"] = $item["goodsname"];
    $temp["goodsimg"] = $item["goodsimg"];
    $temp["goodsnum"] = $item["goodsnum"];
    $temp["goodsprice"] = $item["goodsprice"];
    $list[] = $temp;
}
echo  json_encode($list);
 