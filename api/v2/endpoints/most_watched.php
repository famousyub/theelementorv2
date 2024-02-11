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

$limit = (!empty($_POST['limit']) && is_numeric($_POST['limit']) && $_POST['limit'] > 0 && $_POST['limit'] <= 50 ? Wo_Secure($_POST['limit']) : 20);

$most_matched = Wo_GetMtwFilms($limit);
$response_data = array(
                    'api_status' => 200,
                    'data'         => $most_matched
                );