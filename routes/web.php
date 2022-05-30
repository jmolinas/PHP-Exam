<?php
$request = $_SERVER['PATH_INFO'];

switch ($request) {
    case '/' :
        echo 'Exam';
        break;
    case '' :
        echo 'Exam';
        break;
    case '/export' :
        require __DIR__ . '/../pages/Export.php';
        break;
    case '/report' :
        require __DIR__ . '/../pages/Report.php';
        break;
    default:
        http_response_code(404);
        echo 'Page Not found';
        break;
}