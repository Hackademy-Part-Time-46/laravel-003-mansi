<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Lista di regioni</h1>

    @foreach ($regioni as $nome_regione => $provincia)
        <h3>{{ $nome_regione }}</h3>
        <ul>
            @foreach ($provincia as $singola)
                <li><a href="/provincia/{{ $singola }}">{{ $singola }}</a></li>
            @endforeach
        </ul>
    @endforeach
</body>

</html>
