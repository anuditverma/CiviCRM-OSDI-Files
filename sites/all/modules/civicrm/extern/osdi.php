<?php

header("Content-Type:application/hal+json");

$params['motd'] = 'Welcome to the AEP of your site';
$params['_links'] = array(
    'curies' => array(
        array('name' => 'osdi','href' => '/sites/default/ext/org.civicrm.osdi/api/v3/{rel}','templated' => true),
        array('name' => 'civicrm','href' => '/sites/default/ext/org.civicrm.osdi/api/v3/{rel}','templated' => true),
       ),
    'self' => array('href' => '/sites/all/modules/civicrm/extern/osdi.php','title' => 'This API entry point'),
    'canvasser:brand_logo'=> array('href' => '/sites/default/files/logo.png',
                            'title' => 'The branding logo for use in UI'),
    'osdi:people' => array('href' => '/sites/default/ext/org.civicrm.osdi/api/v3/People/index.php',
                            'title' => 'The collection of people in the system'),
    'osdi:person_signup_helper' => array('href' => '/sites/default/ext/org.civicrm.osdi/api/v3/signup.php',
    								'title' => 'Proxy signup helper')
);

echo json_encode($params);
