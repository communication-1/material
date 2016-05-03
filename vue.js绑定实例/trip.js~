/**
 * Created by Administrator on 2016/4/25 0025.
 */
var mysql =require('mysql');
var connection=mysql.createConnection({
    host:'192.168.1.203',
    user:'qhf',
    password:'123456',
    port:'3306',
    database:'qhf',
});
connection.connect();
var userAddSql = "INSERT INTO trip(id,style,size,address)VALUES(56,23,32,23)";
var userAddSql_Params = ['qhf','123456'];
connection.query(userAddSq1,userAddSq1_Params,function(err,result){
    if(err){
        console.log('[INSET ERROR] - ',err.massage);
        return;
    }
    console.log('--INSERT--')
    console.log('INSERT ID:',result);
    console.log()
});
connection.end();
