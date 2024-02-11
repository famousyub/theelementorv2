<?php
// +------------------------------------------------------------------------+
// | @author Megalo Technologies
// | @author_url 1: http://www.megalotechnologies.com
// | @author_url 2: https://sourceforge.net/projects/element-ossn
// | @author_email: development@megalotechnologies.com   
// +------------------------------------------------------------------------+
// | Element - The Open Source Social Network
// | Copyright (c) 2018 WoWonder. All rights reserved.
// +------------------------------------------------------------------------+
$response_data = array(
    'api_status' => 400
);
if (!empty($_POST['message_id']) && is_numeric($_POST['message_id']) && $_POST['message_id'] > 0) {
	$message_id = Wo_Secure($_POST['message_id']);
    $message = $db->where('id',$message_id)->getOne(T_MESSAGES);
    if (!empty($message) && !empty($message_id) && is_numeric($message_id) && $message_id > 0) {
        if (Wo_DeleteMessage($message_id) === true) {
            $response_data = array(
                                'api_status' => 200,
                                'message' => 'message successfully deleted.'
                            );
        }
        else{
        	$error_code    = 6;
		    $error_message = 'something went wrong';
        }
    }
    else{
    	$error_code    = 5;
	    $error_message = 'message_id can not be empty';
    }
}
else{
	$error_code    = 4;
    $error_message = 'message_id can not be empty';
}