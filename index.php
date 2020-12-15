<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Email snack PHP</title>
</head>

<body>
    

<?php

    if ( empty($_GET['name']) === false && strlen($_GET['name']) > 3) {

        if  ( empty($_GET['email']) === false && strpos($_GET['email'], '@') || strpos($_GET['email'], '.') ) {

            if ( empty($_GET['age']) === false && is_numeric($_GET['age'])) {

                $validator = 'Accesso riuscito';

            } else $validator = 'Accesso non riuscito, indicare età con un dato numerico';

        } else $validator = 'Accesso non riuscito, inserire una mail contenente un . e una @';

    } else $validator = 'Accesso non riuscito, inserire un nome valido';

?>

<h1>
    <i class="fas fa-arrow-up"></i>
    Email access by correct Query String
    <i class="fas fa-arrow-up"></i>
</h1>
<p> <?php echo($validator); ?> </p>



</body>

</html>