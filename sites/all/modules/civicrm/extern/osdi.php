<?php

$params['motd'] = 'Welcome to CiviCRM AEP!';
$params['_links'] = array(
    'curies' => array(
        array('name' => 'osdi','href' => 'https://osdi-sample-system.org/docs/v1/{rel}','templated' => true),
       ),
    'self' => array('href' => '/sites/all/modules/civicrm/extern/osdi.php','title' => 'This API entry point'),
    'osdi:people' => array('href' => '/sites/all/modules/civicrm/extern/osdi.php?entity=People&action=get',
                            'title' => 'The collection of people in the system')
);

echo json_encode($params);
