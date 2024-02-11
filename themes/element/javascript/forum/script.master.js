// +------------------------------------------------------------------------+
// | @author CEO Brandon Gibson (Engineer)
// | @author_url 1: https://www.megalosocial.com
// | @author_url 2: https://megalotechnologies.com
// | @author_email: development@megalotechnologies.com   
// +------------------------------------------------------------------------+
// | Megalo Social - Facebook's Biggest Competitor
// | Copyright (c) 2022 Megalo Social. All rights reserved.
// +------------------------------------------------------------------------+

$(document).ready(function(){

      $(document).on("click",".show-forums",function(){
          $("div[data-slide=" +  $(this).attr("id")+"]").slideToggle("slow");
      });


      

 });
