/**
 * Main Application
 * 
 * Define in the array, the first parameter of require, the relative path to the file
 * that defines the module that you'l need in this module (is like an import).
 * 
 * Each module is going to be a parameter for the Main module and will be available in
 * the named paramter. So view/issue will be loading view/issue.js and will be usable with
 * issueView variable.
 *   
 * @returns Module
 */
require(["view/issue", "view/nav"], function(issueView, navView) {
  (function($, document) {
    $(document).ready(function() {

      window.App = {
        Models: {},
        Collections: {},
        Views: {},
        Router: {}
      };
      
      //Define more routes here.
      window.App.Router = Backbone.Router.extend({
        routes: {
          "" : "issues",
          "issues" : "issues",
          "issue/new": "issue_new",
          "issue/:id": "issue",
          "issue/:id/delete": "issue_delete",
          "issue/:id/edit" : "issue_edit"
        },
        issues: function () {
          var view = new issueView();
        },
        issue: function (id) {
          $('#content').html("Ver Issue " + id);
        },
        issue_delete: function (id) {
          $('#content').html("Delete Issue" + id);
        },
        issue_edit: function (id) {
          $('#content').html("Edit Issue" + id);
        },
        issue_new: function () {
          var view = new issueView();
          view.renderForm();
        }
      });
      
      /** Renders the Navigation **/
      var nav = new navView();
      nav.render();
      
      // Starts the Backbone Router.
      window.app = new window.App.Router;
      Backbone.history.start();
    });
  
  })(jQuery, document);
});
