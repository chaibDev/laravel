<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel & MYSQL DB Connection</title>
</head>
<style>
    body {
        background-color: greenyellow;
        color: red;
        size: 20px;
    }

    div {
        width: 300px;
        margin-left: auto;
        margin-right: auto;
        height: 300px;
        background-color: aqua;
    }

    body div {
        size: 30px;
        text-size-adjust: 30px;
    }

    h1 {
        size: 20px;
        color: red;
        text-align: center;
    }
</style>

<body>
    <h1>Félicitations</h1>
    <marquee direction="up">
        <div class="connexion">

            <?php

            if (DB::connection()->getPdo()) {
                echo "db diagram io  Vous Vous êtes connecté avec succès à votre base de données  " . DB::connection()->getDatabaseName();
            }


            ?>
        </div>
    </marquee>
</body>

</html>