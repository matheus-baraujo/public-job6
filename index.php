<?php

session_start();

$pagina = 'home';

if(isset($_GET['page'])) {
    $pagina = addslashes($_GET['page']);
}

include 'stringManipulation.php';

include './public/database/connection.php';

include './public/partials/directives.php';

?>

<body>

<?php

switch ($pagina) {
    case 'home':
        include './public/views/home.php';
        break;

    case 'validation':
        include './public/views/listValidation.php';
        break;

    case 'result':
        include './public/views/listResult.php';
        break;

    case 'login':
        include './public/views/clientLogin.php';
        break;

    case 'register':
        include './public/views/clientRegister.php';
        break;

    case 'thankYou':
        include './public/views/thankYou.php';
        break;
      
    case 'admin':
        include './public/views/admin.php';
        break; 
    case 'loggedAdmin':
        if (isset($_SESSION['adminLogged'])) {
            include './public/views/loggedAdmin.php';    
        }else {
            header("Location: index.php?page=admin");
        }
        break;
    case 'formAdmin':
        if (isset($_SESSION['adminLogged'])) {
            include './public/views/formAdmin.php';    
        }else {
            header("Location: index.php?page=admin");
        }
        break;
    default:
        include './public/views/home.php';
        break;
}


include './public/partials/scripts.php';

?>

</body>