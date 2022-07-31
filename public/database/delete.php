<?php

include './public/database/connection.php';

switch ($_POST['type']) {
    case 'cliente':
        # code...
        break;

    case 'parceiros':
        # code...
        break;

    case 'estoque':
        # code...
        break;
    
    default:
        header('location: ../../index.php?page=loggedAdmin');
        break;
}