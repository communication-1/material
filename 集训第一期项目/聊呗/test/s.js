// 服务器代码
var dgram = require("dgram");
var server = dgram.createSocket('udp4');
server.bind(8080);

server.on("message",function(msg,rinfo){
    console.log(msg.toString());
});