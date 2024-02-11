// +------------------------------------------------------------------------+
// | @author Megalo Technologies
// | @author_url 1: https://www.megalotechnologies.com
// | @author_url 2: https://www.megalosocial.com
// | @author_email: development@megalotechnologies.com   
// +------------------------------------------------------------------------+
// | Element - The Open Source Social Network
// | GNU-GPL3 Open Source License
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