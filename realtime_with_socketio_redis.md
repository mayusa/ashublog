1. install plugins
> npm install express redis socket.io vue-socket.io
2. edit app.js
````
import VueSocketio from 'vue-socket.io'
Vue.use(VueSocketio, 'http://localhost:9000')

````
3. install redis package:
> composer require predis/predis

4. edit  /config/app.php:

change 'Redis' => Illuminate\Support\Facades\Redis::class,
to 'LRedis' => Illuminate\Support\Facades\Redis::class,

5.add server.js to project root

````
var app = require('express')()
var server = require('http').Server(app)
var io = require('socket.io')(server)
var redis = require('redis')

server.listen('9900')
io.on('connection', function(socket){
    console.log('client connected')
    var redisClient = redis.createClient()

    redisClient.subscribe('message')

    redisClient.on('message', function(channel, message){
        console.log('new event' + channel + message)
        })
    redisClient.on('disconnect', function(){
        redisClient.quit()
        })
})

````

6. B/E code for realtime
````
$redis = \LRedis::connection();
$redis->publish('message', $user);

````
7. start redis server
> redis-4.0.1/src/redis-server

8. start node server
> node server.js
