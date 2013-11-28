
var express = require('express');
var Resource = require('express-resource-new');
var app = express();

app.configure(function(){
  app.set('port', 3000);
  app.use(express.bodyParser());
  app.use(express.methodOverride());
  app.use(app.router);
  app.use(express.logger('dev'));
  app.use(express.errorHandler());
  app.set('view engine', 'jade');
  app.set('controllers', __dirname + '/controllers');
  app.set('views', __dirname + '/views');
});

app.resource('issues');
app.use(express.static(__dirname + '/web'));

app.listen(app.get('port'), function(){
  console.log("Node.js Hosting Test listening on port " + app.get('port'));
  console.log(app.routes);
});
