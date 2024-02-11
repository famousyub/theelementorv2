// +------------------------------------------------------------------------+
// | @author CEO Brandon Gibson (Engineer)
// | @author_url 1: https://www.megalosocial.com
// | @author_url 2: https://megalotechnologies.com
// | @author_email: development@megalotechnologies.com   
// +------------------------------------------------------------------------+
// | Megalo Social - Facebook's Biggest Competitor
// | Copyright (c) 2022 Megalo Social. All rights reserved.
// +------------------------------------------------------------------------+

jQuery(document).ready(function($) {
	$(document).on('click', '.delete-reply', function(event) {
		event.preventDefault();
		$("#delete-reply").attr('data-reply-ident', $(this).attr("id")).modal("show");
	});	
	
	$(document).on('click', '.delete-thread', function(event) {
		event.preventDefault();
		$("#delete-thread").attr('data-thread-ident', $(this).attr("id")).modal("show");
	});
});