<?php
        $host   = "localhost:3306";
        $user   = "root";
        $pass   = "pude2015";
        $dbname = "vav";     
        $id = mysql_connect($host, $user, $pass);
        mysql_query("set names utf8");
        mysql_select_db($dbname);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>实验室管理系统</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <?php
    //1_1
        $result=mysql_query(" select * from vaa where day='1_1'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function s1(){
                         var s1=document.getElementById('s1');
                         s1.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function s1() {
                             var s1=document.getElementById('s1');
                                   s1.innerHTML='<a href=\"service.php?m=1_1\">可预约</a>';
                         }
                         </script>
                         ";
            }
//1_2
        $result=mysql_query(" select * from vaa where day='1_2'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function s2(){
                         var s2=document.getElementById('s2');
                         s2.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                              function s2() {
                             var s2=document.getElementById('s2');
                                   s2.innerHTML='<a href=\"service.php?m=1_2\">可预约</a>';
                         }
                         </script>
                         ";
            }
 //1_3  
          $result=mysql_query(" select * from vaa where day='1_3'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function s3(){
                         var s3=document.getElementById('s3');
                         s3.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function s3() {
                             var s3=document.getElementById('s3');
                                   s3.innerHTML='<a href=\"service.php?m=1_3\">可预约</a>';
                         }
                         </script>
                         ";
            } 
//1_4
      $result=mysql_query(" select * from vaa where day='1_4'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function s4(){
                         var s4=document.getElementById('s4');
                         s4.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function s4() {
                             var s4=document.getElementById('s4');
                                   s4.innerHTML='<a href=\"service.php?m=1_4\">可预约</a>';
                         }
                         </script>
                         ";
            }            
//1_5
             $result=mysql_query(" select * from vaa where day='1_5'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function s5(){
                         var s5=document.getElementById('s5');
                         s5.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function s5() {
                             var s5=document.getElementById('s5');
                                   s5.innerHTML='<a href=\"service.php?m=1_5\">可预约</a>';
                         }
                         </script>
                         ";
            }
//1_6
        $result=mysql_query(" select * from vaa where day='1_6'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function s6(){
                         var s6=document.getElementById('s6');
                         s6.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function s6() {
                             var s6=document.getElementById('s6');
                                   s6.innerHTML='<a href=\"service.php?m=1_6\">可预约</a>';
                         }
                         </script>
                         ";
            }    
//1_7
         $result=mysql_query(" select * from vaa where day='1_7'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function s7(){
                         var s7=document.getElementById('s7');
                         s7.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function s7() {
                             var s7=document.getElementById('s7');
                                   s7.innerHTML='<a href=\"service.php?m=1_7\">可预约</a>';
                         }
                         </script>
                         ";
            }      
//2_1
             $result=mysql_query(" select * from vaa where day='2_1'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function s8(){
                         var s8=document.getElementById('a1');
                         s8.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function s8() {
                             var s8=document.getElementById('a1');
                                   s8.innerHTML='<a href=\"service.php?m=2_1\">可预约</a>';
                         }
                         </script>
                         ";
            }
 //2_2
      $result=mysql_query(" select * from vaa where day='2_2'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function s9(){
                         var s9=document.getElementById('a2');
                         s9.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function s9() {
                             var s9=document.getElementById('a2');
                                   s9.innerHTML='<a href=\"service.php?m=2_2\">可预约</a>';
                         }
                         </script>
                         ";
            }    
 //2_3
          $result=mysql_query(" select * from vaa where day='2_3'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function s10(){
                         var s10=document.getElementById('a3');
                         s10.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function s10() {
                             var s10=document.getElementById('a3');
                                   s10.innerHTML='<a href=\"service.php?m=2_3\">可预约</a>';
                         }
                         </script>
                         ";
            }   
 //2_4
          $result=mysql_query(" select * from vaa where day='2_4'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function s11(){
                         var s11=document.getElementById('a4');
                         s11.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function s11() {
                             var s11=document.getElementById('a4');
                                   s11.innerHTML='<a href=\"service.php?m=2_4\">可预约</a>';
                         }
                         </script>
                         ";
            }     
 //2_5
          $result=mysql_query(" select * from vaa where day='2_5'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function s12(){
                         var s12=document.getElementById('a5');
                         s12.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function s12() {
                             var s12=document.getElementById('a5');
                                   s12.innerHTML='<a href=\"service.php?m=2_5\">可预约</a>';
                         }
                         </script>
                         ";
            }      
//2_6
        $result=mysql_query(" select * from vaa where day='2_6'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function s13(){
                         var s13=document.getElementById('a6');
                         s13.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function s13() {
                             var s13=document.getElementById('a6');
                                   s13.innerHTML='<a href=\"service.php?m=2_6\">可预约</a>';
                         }
                         </script>
                         ";
            }    
 //2_7
         $result=mysql_query(" select * from vaa where day='2_7'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function s14(){
                         var s14=document.getElementById('a7');
                         s14.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function s14() {
                             var s14=document.getElementById('a7');
                                   s14.innerHTML='<a href=\"service.php?m=2_7\">可预约</a>';
                         }
                         </script>
                         ";
            }                                             
        mysql_close($con);
?>
</head>
<body onload="s1(),s2(),s3(),s4(),s5(),s6(),s7(),s8(),s9(),s10(),s11(),s12(),s13(),s14()">
<div id="subject">
    <div id="head">
        <h2>实验室预约管理</h2>
    </div>
    <div id="second">
        <a href="index.php"><input type="button" value="上一周"></a>
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
                <td><span id="s1"></span></td>
                <td><span id="s2"></span></td>
                <td><span id="s3"></span></td>
                <td><span id="s4"></span></td>
                <td><span id="s5"></span></td>
                <td><span id="s6"></span></td>
                <td><span id="s7"></span></td>
            </tr>
            <tr>
                <td>下午<br></td>
                <td><span id="a1"></span></td>
                <td><span id="a2"></span></td>
                <td><span id="a3"></span></td>
                <td><span id="a4"></span></td>
                <td><span id="a5"></span></td>
                <td><span id="a6"></span></td>
                <td><span id="a7"></span></td>
            </tr>
        </table>
     </div>
   </div>
  </body>
</html>
