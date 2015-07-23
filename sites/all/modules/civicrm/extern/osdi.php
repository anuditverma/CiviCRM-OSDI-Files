<?php

$params['motd'] = 'Welcome to CiviCRM AEP!';
$params['_links'] = array(
    'curies' => array(
        array('name' => 'osdi','href' => 'https://osdi-sample-system.org/docs/v1/{rel}','templated' => true),
       ),
    'self' => array('href' => '/sites/all/modules/civicrm/extern/osdi.php','title' => 'This API entry point'),
    'osdi:people' => array('href' => '/sites/all/modules/civicrm/extern/rest.php?entity=People&action=get&json={%22sequential%22:1,%22return%22:%22magicword%22,%22magicword%22:%22sesame%22}&api_key=9BivcYv1cOT7md6Rxom8Stiz&key=gNhqb5uGUaiLAHrZ',
                            'title' => 'The collection of people in the system')
);

echo json_encode($params);
