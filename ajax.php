<?php

include 'core/Request.php';

$request = new Request();

$section = $request->get('section');
$subSection = $request->get('subsection');

switch ($section) {
    case 'posts':
            if ($subSection === NULL) {
                print json_encode(['one post probably by id']);
                exit(0);
            }

            if ($subSection === 'all' ) {
                print json_encode([['some post nonesense'], ['some other post']]);
                exit(0);
            }
    break;

}

http://yourhost /my-app/ajax.php?section=posts&subsection=all
?>