Db = require('mongodb').Db;
Connection = require('mongodb').Connection;
Server = require('mongodb').Server;
BSON = require('mongodb').BSON;
ObjectID = require('mongodb').ObjectID;
host = 'localhost';
port = '27017';

db = new Db('denunciaya', new Server(
         host, 
         port, 
         {auto_reconnect: true, safa: false}, {})
);

db.open(function(){});
collection = db.collection('issues');
console.log('Connectd');

function sendResponse(response, err, data) {
  if (err) { 
    response.send(500, err);
  } else {    
    response.send(data);
  }
}

module.exports = {
  index: function(request, response) {
    collection.find().toArray(function(error, results) {
      sendResponse(response, error, results);
    });
  },
  show: function(request, response) {
    response.send('show issue ' + request.params.issue);
  },
  new: function(request, response) {
  },
  create: function(request, response) {
    if (typeof(request.body) !== 'object') {
      sendResponse(response, 'Bad Input, is not an object');
    }
    collection.insert(request.body, {w:0}, function(error, results) {              
      sendResponse(response, error, results[0]);
    });
  },
  edit: function(request, response) {
    response.send('edit issue ' + request.params.issue);
  },
  update: function(request, response) {
    if (typeof(request.body) !== 'object') {
      sendResponse(response, 'Bad Input, is not an object');
    }
    collection.save(request.body);
    sendResponse(response, null, request.body);

  },
  destroy: function(request, response) {
    response.send('delete issue ' + request.params.issue);
  }
};
