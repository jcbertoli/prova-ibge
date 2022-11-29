<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/showData.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="title">

            @if(isset($data['error']))
                <h1>Ocorreu um erro ao buscar os dados da região</h1>
            @else
                <H1>Dados dos estados</H1>
            
                <div class="data">
                    <p>Dados de: {{ $data['horario'] }} </p>
                    <p>População: {{ number_format($data['projecao']['populacao']) }}</p>
                    <p>Incremento populacional: {{ number_format($data['projecao']['periodoMedio']['incrementoPopulacional']) }} </p>
                </div>

            @endif

    </div>

</body>
</html>