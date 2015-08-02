<?php

$params['motd'] = 'Welcome to CiviCRM AEP!';
$params['_links'] = array(
    'curies' => array(
        array('name' => 'osdi','href' => '/sites/default/ext/osdi/api/v3/{rel}','templated' => true),
        array('name' => 'civicrm','href' => '/sites/default/ext/osdi/api/v3/{rel}','templated' => true),
       ),
    'self' => array('href' => '/sites/all/modules/civicrm/extern/osdi.php','title' => 'This API entry point'),
    'canvasser:brand_logo'=> array('href' => '/sites/default/files/logo.png',
                            'title' => 'The branding logo for use in UI'),
    'osdi:people' => array('href' => '/sites/default/ext/osdi/api/v3/People/index.php',
                            'title' => 'The collection of people in the system')
);

echo json_encode($params);
