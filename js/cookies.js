$(document).ready(function(){


       $('#submeter').click(function() {
        $("#dialog").dialog("close");
           if (!document.cookie.indexOf('cadastro=true')) {
            var dcookie = new Date();
            dcookie.setTime(dcookie.getTime() + (300*24*60*60*1000));
            var expira = "expires= " + dcookie.toUTCString();
            document.cookie = "cadastro=true; " + expira + "; path=/";
            $("#dialog").modal("toggle");
        }
       });
                            

    
    }
    
    ); 
                  
/*
    var href = $(this).attr("href");
    $("href").click(function(){
       $().show(); 
       */

/*                  $(".show").click( function(){
    var href = $(this).attr("href");
    $.get(href,function (hdisplayed) {
        $("#content").html( hdisplayed );
    });
});*/
/*$(function(){
    $('#dialog').modal('toggle');
});
$(document).on("click", "a", function(){
        $("#dialog").modal("show");
});*/