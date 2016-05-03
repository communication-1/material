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
    //3_1
        $result=mysql_query(" select * from vaa where day='3_1'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function b1(){
                         var b1=document.getElementById('b1');
                         b1.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function b1() {
                             var b1=document.getElementById('b1');
                                   b1.innerHTML='<a href=\"service.php?m=3_1\">可预约</a>';
                         }
                         </script>
                         ";
            }
//3_2
        $result=mysql_query(" select * from vaa where day='3_2'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function b2(){
                         var b2=document.getElementById('b2');
                         b2.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function b2() {
                             var b2=document.getElementById('b2');
                                   b2.innerHTML='<a href=\"service.php?m=3_2\">可预约</a>';
                         }
                            </script>
                         ";
            }
//3_3
        $result=mysql_query(" select * from vaa where day='3_3'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function b3(){
                         var b3=document.getElementById('b3');
                         b3.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function b3() {
                                   var b3=document.getElementById('b3');
                                   b3.innerHTML='<a href=\"service.php?m=3_3\">可预约</a>';
                         }
                            </script>
                          ";
            }
//3_4
        $result=mysql_query(" select * from vaa where day='3_4'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function b4(){
                         var b3=document.getElementById('b4');
                         b4.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function b4() {
                             var b4=document.getElementById('b4');
                                   b4.innerHTML='<a href=\"service.php?m=3_4\">可预约</a>';
                         }
                           </script>
                         ";
            }  
//3_5
        $result=mysql_query(" select * from vaa where day='3_5'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function b5(){
                         var b5=document.getElementById('b5');
                         b5.innerHTML='已占用';
                         }
                    </script>
                ";   
            }
            else{
                 echo " <script>
                             function b5() {
                             var b5=document.getElementById('b5');
                                   b5.innerHTML='<a href=\"service.php?m=3_5\">可预约</a>';
                         }
                         </script>
                         ";
            }      
//3_6
        $result=mysql_query(" select * from vaa where day='3_6'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function b6(){
                         var b6=document.getElementById('b6');
                         b6.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function b6() {
                             var b6=document.getElementById('b6');
                                   b6.innerHTML='<a href=\"service.php?m=3_6\">可预约</a>';
                         }
                         </script>
                         ";
            }       
//3_7
        $result=mysql_query(" select * from vaa where day='3_7'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function b7(){
                         var b7=document.getElementById('b7');
                         b7.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function b7() {
                             var b7=document.getElementById('b7');
                                   b7.innerHTML='<a href=\"service.php?m=3_7\">可预约</a>';
                         }
                         </script>
                         ";
            }       
//4_1
        $result=mysql_query(" select * from vaa where day='4_1'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function b8(){
                         var b8=document.getElementById('c1');
                         b8.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function b8() {
                             var b8=document.getElementById('c1');
                                   b8.innerHTML='<a href=\"service.php?m=4_1\">可预约</a>';
                         }
                         </script>
                         ";
            }      
//4_2
        $result=mysql_query(" select * from vaa where day='4_2'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function b9(){
                         var b9=document.getElementById('c2');
                         b9.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function b9() {
                             var b9=document.getElementById('c2');
                                   b9.innerHTML='<a href=\"service.php?m=4_2\">可预约</a>';
                         }
                         </script>
                         ";
            }      
//4_3
        $result=mysql_query(" select * from vaa where day='4_3'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function b10(){
                         var b10=document.getElementById('c3');
                         b10.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function b10() {
                             var b10=document.getElementById('c3');
                                   b10.innerHTML='<a href=\"service.php?m=4_3\">可预约</a>';
                         }
                         </script>
                         ";
            }        
//4_4
        $result=mysql_query(" select * from vaa where day='4_4'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function b11(){
                         var b11=document.getElementById('c4');
                         b11.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function b11() {
                             var b11=document.getElementById('c4');
                                   b11.innerHTML='<a href=\"service.php?m=4_4\">可预约</a>';
                         }
                         </script>
                         ";
            }     
//4_5
        $result=mysql_query(" select * from vaa where day='4_5'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function b12(){
                         var b12=document.getElementById('c5');
                         b12.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function b12() {
                             var b12=document.getElementById('c5');
                                   b12.innerHTML='<a href=\"service.php?m=4_5\">可预约</a>';
                         }
                         </script>
                         ";
            }   
//4_6
        $result=mysql_query(" select * from vaa where day='4_6'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function b13(){
                         var b13=document.getElementById('c6');
                         b13.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function b13() {
                             var b13=document.getElementById('c6');
                                   b13.innerHTML='<a href=\"service.php?m=4_6\">可预约</a>';
                         }
                         </script>
                         ";
            } 
//4_7
        $result=mysql_query(" select * from vaa where day='4_7'") or die('查询失败');
        if( mysql_fetch_array($result))
        {
            echo "
                    <script>
                        function b14(){
                         var b14=document.getElementById('c7');
                         b14.innerHTML='已占用';
                         }
                         </script>
                ";   
            }
            else{
                 echo " <script>
                             function b14() {
                             var b14=document.getElementById('c7');
                                   b14.innerHTML='<a href=\"service.php?m=4_7\">可预约</a>';
                         }
                         </script>
                         ";
            }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
        mysql_close($con);
?>           
</head>
<body onload="b1(),b2(),b3(),b4(),b5(),b6(),b7(),b8(),b9(),b10(),b11(),b12(),b13(),b14()" >
<div id="subject">
     <div id="head">
          <h2>实验室预约管理</h2>
     </div>
     <div id="second">
      <a href="about.php"><input type="button" value="下一周"></a>
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
               <td><span id=b1></span></td>
               <td><span id=b2></span></td>
               <td><span id=b3></span></td>
               <td><span id=b4></span></td>
               <td><span id=b5></span></td>
               <td><span id=b6></span></td>
               <td><span id=b7></span></td>
           </tr>
           <tr>
               <td>下午<br></td>
               <td><span id=c1></span></td>
               <td><span id=c2></span></td>
               <td><span id=c3></span></td>
               <td><span id=c4></span></td>
               <td><span id=c5></span></td>
               <td><span id=c6></span></td>
               <td><span id=c7></span></td>
           </tr>
         </table>
     </div>
</div>
</body>
</html>
