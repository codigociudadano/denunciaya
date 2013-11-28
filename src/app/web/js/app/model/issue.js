define([], function() {

  var module = Backbone.Model.extend({
    idAttribute: "_id",
    url: function() {
      return this.id ? '/issues/' + this.id : '/issues'; 
    },
    defaults: {
      title: "",
      description: ""
    },
  });

  return module;  
});
