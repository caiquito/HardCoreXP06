
  $(document).ready(function() {  

    $('a[name=modal-block]').click(function(e) {
      e.preventDefault();
      
      var id = $(this).attr('href');
    
      var maskHeight = $(document).height();
      var maskWidth = $(window).width();
    
      $('#mask').css({'width':maskWidth,'height':maskHeight});

      $('#mask').fadeIn(500);  
      $('#mask').fadeTo("slow",0.8);  
    
      //Get the window height and width
      var winH = $(window).height();
      var winW = $(window).width();
                
      $(id).css('top',  winH/2-$(id).height()/2);
      $(id).css('left', winW/2-$(id).width()/2);
    
      $(id).fadeIn(1000); 
    
    });
    
    $('.window .close').click(function (e) {
      e.preventDefault();
      
      $('#mask').hide();
      $('.window').hide();
    });   
    
    $('#mask').click(function () {
      $(this).hide();
      $('.window').hide();
    });     
    
  });


  jQuery(document).ready(function() {
    $(window).scroll(function () {
        set = $(document).scrollTop()+"px";
        jQuery('#dialog-block').animate(
            {top:set},
            {duration:1000, queue:false}
        );
    });
});
