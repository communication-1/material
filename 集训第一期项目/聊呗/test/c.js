
var dgram = require("dgram");
var client = dgram.createSocket("udp4");
process.stdin.on("data",function(data){
    client.send(data,0,data.length,8080,"localhost");
});