<?php
@require_once("config.php");

$paixu = $_GET["paixu"];
$key = $_GET["key"];
$skipnum = $_GET["skipnum"];
$shownum = $_GET["shownum"];
// $str="select * from goodsinfo  order by goodsprice $paixu";
$str = "select * from goodsinfo where goodsname like '%$key%' order by goodsprice $paixu LIMIT $skipnum,$shownum";

$result = mysql_query($str);

$list = array(); //集合

while ($item = mysql_fetch_array($result)) {
    $temp = array();
    $temp["id"] = $item["id"];
    $temp["goodsname"] = $item["goodsname"];
    $temp["goodsimg"] = $item["goodsimg"];
    $temp["goodsprice"] = $item["goodsprice"];
    $list[] = $temp;
}
echo  json_encode($list);
 