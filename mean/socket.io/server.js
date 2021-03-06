/**
 * Created by naveedulhassan on 12/30/15
 */
// set up ========================
var express  = require('express');
var app      = express();                        // create our app with express
var mongoose = require('mongoose');              // mongoose for mongodb
var morgan = require('morgan');                  // log requests to the console (express4)
var bodyParser = require('body-parser');         // pull information from HTML POST (express4)
var methodOverride = require('method-override'); // simulate DELETE and PUT (express4)
var http = require('http').Server(app);
var io = require('socket.io')(http);

// configuration =================
app.use(express.static(__dirname + '/public'));                 // set the static files location /public/img will be /img for users
app.use(morgan('dev'));                                         // log every request to the console
app.use(bodyParser.urlencoded({'extended':'true'}));            // parse application/x-www-form-urlencoded
app.use(bodyParser.json());                                     // parse application/json
app.use(bodyParser.json({ type: 'application/vnd.api+json' })); // parse application/vnd.api+json as json
app.use(methodOverride());

var fs = require('fs');
io.on('connection', function(socket){
    var obj;
    fs.readFile('users.json', 'utf8', function (err, data) {
        if (err) throw err;
        obj = JSON.parse(data);
        io.emit("users-updated",obj);
    });
});

// routes ======================================================================
app.get('', function(req, res) {
    res.sendfile('./public/index.html'); // load the single view file (angular will handle the page changes on the front-end)
});

// listen (start app with node server.js) ======================================
http.listen(8080);
console.log("App listening on port 8080");
