<?php
//require_once __DIR__ .'/vendor/autoload.php';

require_once('C:\Users\shadow\Desktop\Junior Semester Classes\Semester 2\Web Apps\Twitter Project\cinf301-spr18-project-04\vendor\autoload.php');



if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'main';
    $action = 'home';
}

require_once ('views/layout.php');
