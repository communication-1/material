var mysql  = require('mysql');  //调用MySQL模块

//创建一个connection
var connection = mysql.createConnection({     
  host     : '192.168.1.203',       //主机
  user     : 'five',               //MySQL认证用户名
  password : '123456',        //MySQL认证用户密码
  port: '3306',                   //端口号
}); 
//创建一个connection
connection.connect();

var userModSql = 'UPDATE userinfo SET UserName = ?,UserPass = ? WHERE Id = ?';
var userModSql_Params = ['钟慰', '5678',1];
//改
connection.query(userModSql,userModSql_Params,function (err, result) {
  if(err){
    console.log('[UPDATE ERROR] - ',err.message);
    return;
  }
  console.log('--------------------------UPDATE----------------------------');
  console.log('UPDATE affectedRows',result.affectedRows);
  console.log('-----------------------------------------------------------------\n\n');
});

connection.end();