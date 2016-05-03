<?php
if($_POST['name1'])
{
header("content-type:text/html;charset=utf-8");   
$host	= "localhost:3306";
$user	= "root";
$pass	= "pude2015";
$dbname = "vav";
$id = mysql_connect($host, $user, $pass);
mysql_query("set names utf8");
mysql_select_db($dbname);
$sql  = "insert into vaa (name1,phone1,name2,phone2,name3,tim,day) values ('" . $_POST['name1'] . "', '" . $_POST['phone1'] . "','". $_POST['name2'] . "', '" . $_POST['phone2'] . "', '" .$_POST['name3'] . "', '" . $_POST['tim'] ."','".$_POST['nam']."')";
if($result = mysql_query($sql))
{
echo "预约成功！" ;
echo "
         <script>
            setTimeout(function(){
        
                window.location.href='index.php';
		
              },3000)

         </script>
  "; 
    }
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>实验是预约登记</title>
    <link rel="stylesheet" type="text/css" href="service.css">
</head>
<body>
<div id="subject">
    <div id="head">
        <h2>实验室预约登记信息</h2>
    </div>
    <div id="second">
    <form  name="form" action="service.php" method="post">
    <input name="nam"  type="text" value="<?php echo $_GET['m'];?>" style="display: none" >
        预约者：<input name="name1" type="text" required="required" > 联系方式：<input name="phone1"  type="text" required="required" ><br/><br/>
        导&nbsp&nbsp&nbsp&nbsp师：<input name="name2" type="text" required="required"> 联系方式：<input name="phone2" type="text" required="required" ><br/><br/>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp单位：<input id="unit" type="text" required="required"><br/><br/>
        参与人员：<input id="people" type="text" required="required"><br/><br/>
        实验名称：<input name="name3" type="text" required="required"><br/><br/>
        预约时间：<input name="tim" type="text" required="required"><br/><br/>
        开始时间：<input id="star" type="text" required="required"><br/><br/>
        结束时间：<input id="over" type="text" required="required"><br/><br/>
        <input type="submit" id="but"  value="提交">
     </form>
    </div>
  </div>
 </body>
</html>
<?php
    }
?>
