<?php

include 'core/Request.php';

$request = new Request();

$section = $request->get('section');
$subSection = $request->get('subsection');
switch ($section) {

    case 'postari':

            if ($subSection === 'creaza' ) {
                //insert
                print json_encode([['some post nonesense'], ['some other post']]);
                exit(0);
            }

            if (subSection === 'citeste') {
                //query cu select
            }
    break;

}

http://yourhost /my-app/ajax.php?section=posts&subsection=all
?>


