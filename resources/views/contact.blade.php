<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        body {
            background-color: cadetblue;
            color: yellow;
        }

        div .contact ul li a {
            color: white;
        }
    </style>
</head>

<body>
    <div class="contact">
        <h1>Contact</h1>
        <hr>
        <a href="{{route('accueil')}}">Accueil</a>
        <br>
        <a href="{{route('apropos')}}">à propos</a>

        <br>

        <br>

        <br>

        <p>{{$tel}}</p>
        <p>{{$email}}</p>
    </div>
</body>

</html>