<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des articles</title>
    <style>
        body {
            background-color: lightblue;
            color: yellow;
        }

        .container {
            display: flex;
            color: black;
            width: auto;
            height: 100%;
            margin-right: 20px;
            margin-left: 20px;
            padding: 20px;
            text-align: center;
            border: 1px solid red;
        }

        .lien {
            margin: 20px;
            flex-direction: column;
            border: 1px solid green;
            display: block;
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        h1 {
            text-align: center;
        }

        p {
            text-align: center;
        }

        hr {
            border: 5px solid black;

        }
    </style>
</head>

<body>
    <h1>Liste des articles</h1>
    <br>
    <p><a href="{{route('accueil')}}">Accueil</a>


        <a href="http://127.0.0.1:8000/welcome"> Page LARAVEL</a>
    </p>
    <hr>


    <br>
    <div class="lien">
        <ul>
            <li><a href="{{route('articles.create')}}  ">Créer un article</a></li>
            <li><a href="{{route('articles.edit')}}">Editer un article</a></li>
            <li><a href="{{route('articles.show')}}">Afficher un article</a></li>
        </ul>
    </div>
    <br>
    <br>
    <div class="container">
        @foreach($articles as $article)
        <div class="lien">
            <h2>{{$article->titre}}</a></h2>
            <p>{{$article->contenu}}</p>

        </div>
        @endforeach
    </div>



    <br>

</body>

</html>