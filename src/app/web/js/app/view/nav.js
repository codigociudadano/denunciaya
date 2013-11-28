/**
 * View for the Navigation menu
 * 
 * @param String nav : Template to Nave
 * 
 * @returns Module
 */
define(['text!template/issue/nav.html'], function(nav) {  
  var module = Backbone.View.extend({
    tagName: "div",
    className: "main-navigation",
    el: $("nav.main-navigation"),

    //Renders the Main Nav
    render: function() {
      
      //Add items to the Nav here.
      var links = {
        items: [
          { label: "Issues", href: "#issues" },
          { label: "New Issue", href: "#issue/new" }
        ]
      };
      
      $(this.el).html(_.template(nav, links));                  
    }

  });
  return module;
});