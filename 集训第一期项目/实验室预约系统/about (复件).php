<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>实验室管理系统</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div id="subject">
    <div id="head">
        <h2>实验室预约管理</h2>
    </div>
    <div id="second">
        <a href="index.php"><input type="button" value="上一周"></a>
        <input type="button" value="下一周">
    </div><br/>
    <div id="third">
        <table id="tab" border="1">
            <tr>
                <td></td>
                <td>周一</td>
                <td>周二</td>
                <td>周三</td>
                <td>周四</td>
                <td>周五</td>
                <td>周六</td>
                <td>周天</td>
            </tr>
            <tr>
                <td>上午</td>
                <td>已占用<br><a href="service.php?m=1_1"><span id="s1">可预约</span></a></td>
                <td>已占用<br><a href="service.php?m=1_2"><span id="s2">可预约</span></a></td>
                <td>已占用<br><a href="service.php?m=1_3"><span id="s3">可预约</span></a></td>
                <td>已占用<br><a href="service.php?m=1_4"><span id="s4">可预约</span></a></td>
                <td>已占用<br><a href="service.php?m=1_5"><span id="s5">可预约</span></a></td>
                <td>已占用<br><a href="service.php?m=1_6"><span id="s6">可预约</span></a></td>
                <td>已占用<br><a href="service.php?m=1_7"><span id="s7">可预约</span></a></td>
            </tr>
            <tr>
                <td>下午<br></td>
                <td>已占用<br><a href="service.php?m=2_1"><span id="a1">可预约</span></a></td>
                <td>已占用<br><a href="service.php?m=2_2"><span id="a2">可预约</span></a></td>
                <td>已占用<br><a href="service.php?m=2_3"><span id="a3">可预约</span></a></td>
                <td>已占用<br><a href="service.php?m=2_4"><span id="a4">可预约</span></a></td>
                <td>已占用<br><a href="service.php?m=2_5"><span id="a5">可预约</span></a></td>
                <td>已占用<br><a href="service.php?m=2_6"><span id="a6">可预约</span></a></td>
                <td>已占用<br><a href="service.php?m=2_7"><span id="a7">可预约</span></a></td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>
<?php
        $host   = "localhost:3306";
        $user   = "root";
        $pass   = "pude2015";
        $dbname = "vav";
        $id = mysql_connect($host, $user, $pass);
        mysql_query("set names utf8");
        mysql_select_db($dbname);
        $result= mysql_query(" select * from vaa where day='1_2' ");
    //  echo "$result";
         if ($result) {
          echo "<script>
                    var s1=document.getElementById('s1');
                    s1.innerHTML='';
                   </script>
                  ";
          }
  ?>
