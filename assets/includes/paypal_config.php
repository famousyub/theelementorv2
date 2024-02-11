<?php
// +------------------------------------------------------------------------+
// | @author Megalo Technologies
// | @author_url 1: http://www.megalotechnologies.com
// | @author_url 2: https://sourceforge.net/projects/element-ossn
// | @author_email: development@megalotechnologies.com   
// +------------------------------------------------------------------------+
// | Element - The Open Source Social Network
// | Copyright (c) 2016 WoWonder. All rights reserved.
// +------------------------------------------------------------------------+
require 'assets/libraries/PayPal/vendor/autoload.php';
$paypal = new \PayPal\Rest\ApiContext(
  new \PayPal\Auth\OAuthTokenCredential(
    $wo['config']['paypal_id'],
    $wo['config']['paypal_secret']
  )
);
$paypal->setConfig(
    array(
      'mode' => $wo['config']['paypal_mode']
    )
);