var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);
var redis = require('redis');

server.listen('9900');
io.on('connection', function(socket){
    console.log('client connected');
    var redisClient = redis.createClient();

    redisClient.subscribe('message');

    redisClient.on('message', function(channel, message){
        console.log('new event' + channel + message)
        });
    redisClient.on('disconnect', function(){
        redisClient.quit()
        });
});
