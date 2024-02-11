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

if (empty($_POST['type'])) {
    $error_code    = 3;
    $error_message = 'type (POST) is missing';
}
if (empty($error_code) && !in_array($_POST['type'], array_keys($wo['pro_packages_types']))) {
	$error_code    = 4;
    $error_message = 'type not found';
}

if (empty($error_code) && in_array($_POST['type'], array_keys($wo['pro_packages_types']))) {
	$pro_type = Wo_Secure($_POST['type']);
	$update_array = array(
		                'is_pro' => 1,
		                'pro_time' => time(),
		                'pro_' => 1,
		                'pro_type' => $pro_type
		            );
    if (in_array($pro_type, array_keys($wo['pro_packages_types'])) && $wo['pro_packages'][$wo['pro_packages_types'][$pro_type]]['verified_badge'] == 1) {
        $update_array['verified'] = 1;
    }
    $mysqli       = Wo_UpdateUserData($wo['user']['user_id'], $update_array);
    if ($mysqli) {
    	$response_data = array(
		                    'api_status' => 200,
		                    'message_data' => 'user successfully upgraded'
		                );
    }
}