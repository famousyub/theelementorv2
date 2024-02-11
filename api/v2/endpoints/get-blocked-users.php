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
$blocked_users = Wo_GetBlockedMembers($wo['user']['user_id']);

$users = array();

foreach ($blocked_users as $key => $blocked_user) {
	foreach ($non_allowed as $key => $value) {
	   unset($blocked_user[$value]);
	}
	$blocked_user['gender_text']        = ($blocked_user['gender'] == 'male') ? $wo['lang']['male'] : $wo['lang']['female'];
	$blocked_user['lastseen_time_text'] = Wo_Time_Elapsed_String($blocked_user['lastseen']);
	$users[] = $blocked_user;
}

$response_data = array(
    'api_status' => 200,
    'blocked_users' => $users
);