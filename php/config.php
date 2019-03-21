<?php
@header("content-type:text/html;charset=utf8");
mysql_connect("localhost:3306", "root", "root"); //你们的是3306
mysql_select_db("1811"); //表示选择的执行的数据库
mysql_query("set character set 'utf8'");



// @header("content-type:text/html;charset=utf8");
// mysql_connect("b-mmfrzcwiaxadnu.bch.rds.gz.baidubce.com:3306", "b_mmfrzcwiaxadnu", "123456"); //你们的是3306
// mysql_select_db("b_mmfrzcwiaxadnu"); //表示选择的执行的数据库
// mysql_query("set character set 'utf8'");
 ?>