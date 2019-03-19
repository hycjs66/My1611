<?php
@require_once("config.php");

$paixu = $_GET["paixu"];
$str="select * from goodsinfo  order by goodsprice $paixu";

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
 