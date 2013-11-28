define([
    'text!template/issue/list.html', 
    'text!template/issue/form.html',
    'model/issue',
    'model/issueCollection'
  ], 
  function(list, form, issueModel, issueCollection) {
  var module = Backbone.View.extend({
    tagName: "div",
    className: "list",
    el: $("#content"),
    issue: new issueModel(),
    collection: new issueCollection(),

    initialize: function() {
      this.collection.bind('sync', this.renderList, this);
      this.collection.fetch();
    },

    renderList: function() {
      console.log(this.collection);
      $(this.el).html(_.template(list, {'collection': this.collection} ));
    },

    issueSubmit: function() {
      var form = $('form.issue', this.el);
      var title = $('input[name=title]', form).val();
      var description = $('textarea[name=description]', form).val();      
      
      this.issue.set('title', title);
      this.issue.set('description', description);

      this.issue.save({
        success: function(model, ret) {
          //console.log('success', ret);
          return false;
        },
        error: function (model, ret) {
          //console.log('error', ret);
          return false;
        }
      });
      return false;
    },
    enderForm: function (id) {
      if (typeof(id) !== 'undefined') {
        //Get issue object
        this.issue.fetch(id);
      }
      $(this.el).html(_.template(form, this.issue));
    },
    events: {
      "click form button.save": "issueSubmit"
    }
  });
  return module;
});
