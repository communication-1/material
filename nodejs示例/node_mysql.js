var mysql= require('mysql'); 
var http= require("http"); 
var url = require('url');
var querystring = require('querystring'); 
var TEST_DATABASE = "fish";
var TEST_TABLE = "ly"; 
var client = mysql.createConnection({
         host           : 'localhost',
         user           : 'root',
         password : 'pude2015',
         port           : '3306',
         database  : TEST_DATABASE,
      });

var ret = {};
//ret.message = "Hello";
//console.log(ret);
var server=http.createServer(function(request, response) {  
//       console.log(request.url);
        if (request.url.indexOf('/insert') > -1 ){
        //    ret.message = "添加图书成功."; 
            var address = request.url;
        //接收参数
       var arg = url.parse(address).query;          //arg => name=?&pass=?  
//        console.log("Request for " + arg );  
        var name = querystring.parse(arg).m;         //name => ?  
 //       console.log("name = "+name);
        var pass = querystring.parse(arg).pass;         //pass => ?  
  //      console.log("pass= "+pass);
        var param=[ name,pass];
 //       console.log(param);
        var sql ="insert into "+TEST_TABLE+" set username=?,password=?";
 //       console.log(sql);
        client.query(sql,param,function(err,result){
            if(err){
              ret.message= "插入失败" ;
              response.setHeader("Access-Control-Allow-Origin", "*");
                response.setHeader("Access-Control-Allow-Credentials", "true");
                response.setHeader("Content-Type", "application/json"); 
                response.write( JSON.stringify(ret) );
                response.end();    
              
            }else{
                console.log("33333");
                ret.message="成功";
		//重定向出错
	//	response.redirect('www.baidu.com');
		//出错
	//	 response.writeHead(301,{ 'Location':'http://www.baidu.com'}); 
		 
	/*
		response.statusCode = 302;
		response.setHeader("Location", "www.baidu.com");
		*/
                response.setHeader("Access-Control-Allow-Origin", "*");
                response.setHeader("Access-Control-Allow-Credentials", "true");
                response.setHeader("Content-Type", "application/json"); 
                response.write( JSON.stringify(ret) );
                response.end();    
            }
            
        });

        }else {
            ret.message = "Invalid URL.";
            console.log(ret);
        }
        console.log(ret);

       
});
server.listen(8000);
console.log(133); 



/*  function  clientReady(address){
    var ret = {};
 //   var a = url.parse('http://example.com:8080/one?a=index&t=article&m=default');
  // console.log(a);
        
        //接收参数
       var arg = url.parse(address).query;          //arg => name=?&pass=?  
//        console.log("Request for " + arg );  
        var name = querystring.parse(arg).m;         //name => ?  
        console.log("name = "+name);
        var pass = querystring.parse(arg).pass;         //pass => ?  
        console.log("pass= "+pass);
        var param=[ ""+name,""+pass];
        console.log(param);
        var sql ="select * from ly";
        console.log(sql);
        client.query(sql,function(err,result){
            console.log("22222");
            if(err){
                console.log("444444");
              ret.message= "插入失败" ;
              
              return ret;
            }else{
                console.log("33333");
                ret.message="成功";
                
                return ret;
            }
            
        });  
       }    
*/

  
