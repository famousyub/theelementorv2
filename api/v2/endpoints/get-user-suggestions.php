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
$users = array();
$contacts_user = array();

$options['limit'] = (!empty($_POST['limit'])) ? (int) $_POST['limit'] : 12;

$get_users = Wo_UserSug($options['limit']);

foreach ($get_users as $key => $user) {
	foreach ($non_allowed as $key => $value) {
       unset($user[$value]);
    }
    $user['lastseen_time_text'] = Wo_Time_Elapsed_String($user['lastseen']);
    $users[] = $user; 
}

if (!empty($_POST['contacts'])) {
	$get_users = Wo_UserContactsAPP($options['limit'], $_POST['contacts'], $wo['user']['user_id']);
    foreach ($get_users as $key => $user) {
		foreach ($non_allowed as $key => $value) {
	       unset($user[$value]);
	    }
	    $user['lastseen_time_text'] = Wo_Time_Elapsed_String($user['lastseen']);
	    $contacts_users[] = $user; 
	}
}

$response_data = array(
    'api_status' => 200,
    'suggestions' => $users
);

if (!empty($_POST['contacts'])) {
	$response_data['contacts_suggestions'] = $contacts_user;
}