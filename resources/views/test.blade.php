<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <style>
        body {
            background-color: darkslategrey;
            color: yellow;
        }

        body .accueil ul li a {
            color: white;
        }

        h1 {
            text-align: center;
            color: green;
            size: 30px;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="accueil">

        <h1>Page d'accueil</h1>
        <h2>Bonjour ! {{$name}}</h2>
        <hr>

        <ul>

            <br>
            <li><a href="{{route('contact', [100, 'Chaibdraa'])}}">Page de Contact</a></li>
            <br>
            <li><a href="{{route('apropos')}}">à propos</a></li>
            <br>
            <li><a href="{{route('articles')}}">Index Liste des articles</a></li>
            <br>


        </ul>
    </div>
</body>

</html>