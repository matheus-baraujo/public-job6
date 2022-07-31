<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,500;0,600;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- Datatables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <!-- Personal modifications -->
    <link rel="stylesheet" href="./public/css/general.css">

    <?php 

        $pageTitle = '';
        $pageDesc = '';
        $pageKeywords = '';

        switch ($pagina) {
            case 'product':

                //$info = "SELECT * FROM seo WHERE id_seo = 1";
                //$seo = mysqli_fetch_array(mysqli_query($conn, $info));

                //$pageTitle = $seo['seoTitle'];
                //$pageDesc = $seo['seoDesc'];
                //$pageKeywords = $seo['seoKey'];
                break;
            
            default:
                //$info = "SELECT * FROM seo WHERE id_seo = 1";
                //$seo = mysqli_fetch_array(mysqli_query($conn, $info));

                //$pageTitle = $seo['seoTitle'];
                //$pageDesc = $seo['seoDesc'];
                //$pageKeywords = $seo['seoKey'];
                break;
        }

        echo '<title>'.$pageTitle.'</title>';
        echo '<meta name="description" content="'.$pageDesc.'">';
        echo '<meta name="keywords" content="'.$pageKeywords.'">';
    ?>

    <meta name="robots" content="index, follow">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,500;1,600;1,700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/71ab88a830.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">

</head>