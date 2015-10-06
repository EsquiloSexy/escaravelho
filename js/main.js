$(document).ready(function() {

  var active = $('ul > li.active');

  $('.li_click').click(function(){
      $('ul.navbar-nav > li').removeClass('active');
      $(this).addClass('active');
  });

  $('.modal').on('hidden.bs.modal', function (e) {
   $('ul.navbar-nav > li').removeClass('active');
   active.addClass('active');
});

 
  //Sort random function
  function random(owlSelector){
    owlSelector.children().sort(function(){
        return Math.round(Math.random()) - 0.5;
    }).each(function(){
      $(this).appendTo(owlSelector);
    });
  }
 
  $("#slider").owlCarousel({
    navigation: true,
    navigationText: [
      '<span class="glyphicon glyphicon-triangle-left" style="font-size:15px; color:#fff; margin-top:3px;" aria-hidden="true"></span>',
      '<span class="glyphicon glyphicon-triangle-right" style="font-size:15px; color:#fff; margin-top:3px;" aria-hidden="true"></span>'
      ],
    pagination: false,
    lazyLoad : true,
    itemsDesktop:[1500,4],
    itemsDesktopSmall:[1100,3],
    itemsTablet: [825,2],
    beforeInit : function(elem){
      //Parameter elem pointing to $("#owl-demo")
      random(elem);
    }
 
  });

   $('.btsocial').socialProfiles({
  email: '#',
  behance: '#',
  facebook: '#',
  twitter: '#',
  pinterest: '#',
  dribbble: '#',
  scoutzie: '#'
  });
   
});