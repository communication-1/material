var TEST_DATABASE = 'vav';  
var TEST_TABLE = 'vaa';
//创建链接  
var options = {  
   host     : "localhost";      
   user     : "root";            
   password :  "pude2015";   
   port: '3306',     
   database:  TEST_DATABASE ,            
};  
 function  serch() {
     alert('123');
      client.query(  
      sql ="select * from "+TEST_TABLE+" where day='1_1' " ,
       
 function(err, results, fields) {  
     client.end();
     if (err) {  
        throw err;  
    }   
     if(results)
   {  
        console.log(sql);
        var s1=document.getElementById('s1');
               s1.innerHTML=''; 
   }
});