define(['model/issue'], function(issueModel) {
  var module = Backbone.Collection.extend({
    model: issueModel,
    url: 'issues'
  });
  return module;  
});
