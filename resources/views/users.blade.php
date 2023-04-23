<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs</title>
    <style>
        body {
            background-color: yellow;
            color: black;
            size: 20px;

        }
    </style>
</head>

<body>

    <marquee>
        <h1>Listes des Utilisateurs</h1>
    </marquee>
    <br>
    <table>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>email</th>

        </tr>
        <hr>
        @foreach($amis as $ami)
        <tr>
            <td>{{$amis->id}}</td>
            <td>{{$amis->name}}</td>
            <td>{{$amis->email}}</td>

        </tr>
        @endforeach

    </table>
</body>

</html>