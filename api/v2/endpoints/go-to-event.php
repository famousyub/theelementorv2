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
    'api_status' => 400,
);
if (empty($_POST['event_id'])) {
    $error_code    = 3;
    $error_message = 'event_id (POST) is missing';
}
if (empty($error_code)) {
    $event_id   = Wo_Secure($_POST['event_id']);
    $event_data = Wo_EventData($event_id);
    if (empty($event_data)) {
        $error_code    = 6;
        $error_message = 'event not found';
    } else {
    	$go_message = 'invalid';
        if (Wo_EventGoingExists($event_id) === true) {
            if (Wo_UnsetEventGoingUsers($event_id)) {
                $go_message = 'not-going';
            }
        } else {
            if (Wo_AddEventGoingUsers($event_id)) {
                $go_message = 'going';
            }
        }
        $response_data = array(
		    'api_status' => 200,
		    'go_status' => $go_message
		);
    }
}