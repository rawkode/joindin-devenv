<?php

$config =  array(
    'mode' => 'development',

    // the URL of web2 website is used in links within emails
    'website_url' => 'https://joind.in',

    'oauth' => array(
        'expirable_client_ids' => array(
            // some clients, (e.g. web2) do not hold onto their token after the
            // user logs out of the client, so we can expire their old tokens.
            'web2',
        ),
    ),
    'event_image_path' => __DIR__ . '/../../joind.in/src/inc/img/event_icons/',
    'email' => array(
        'contact' => 'feedback@joind.in',
        'from' => 'info@joind.in',
        'forward_all_to' => false
    ),
    'twitter' => array(
        // set up the key at https://apps.twitter.com/
        // configure the callback url as /user/twitter-access on web2
        'consumer_key' => '',
        'consumer_secret' => ''
    ),
    'facebook' => array(
        // set up at https://developers.facebook.com/apps/
        // configure url in OAuth Settings as /user/facebook-access on web2
        'app_id' => '',
        'app_secret' => '',
    ),
    'features' => array(
        'allow_auto_verify_users' => false,
        'allow_auto_approve_events' => false,
    ),
    'limits' => array(
        'max_pending_events' => 3
    )
);

// uncomment and add your akismet key here if you want to do spam checking
// $config['akismet'] = [
//     'apiKey' => '',
//     'blog' => 'http://joind.in',
// ];
