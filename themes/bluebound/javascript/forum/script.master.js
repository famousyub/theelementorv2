// +------------------------------------------------------------------------+
// | @author Megalo Technologies
// | @author_url 1: https://www.megalotechnologies.com
// | @author_url 2: https://www.megalosocial.com
// | @author_email: development@megalotechnologies.com   
// +------------------------------------------------------------------------+
// | Element - The Open Source Social Network
// | GNU-GPL3 Open Source License
// +------------------------------------------------------------------------+

$(document).ready(function(){

      $(document).on("click",".show-forums",function(){
          $("div[data-slide=" +  $(this).attr("id")+"]").slideToggle("slow");
      });


      

 });
