<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-light">

    <div class="container mt-3">

        
        @if(isset($regions['error']))
            <h1>Ocorreu um erro ao buscar as regiões</h1>
        @else
        <h3>Selecionar região</h3>
        <select name="regions" id="regions">
            @foreach($regions as $region) 
                <option value="{{ $region['id'] }}">{{ $region['nome'] }}</option>
            @endforeach
        </select>
        <button class="btn btn-primary" onclick='searchRegion()'>Buscar região</button>

        @endif  


    </div>

    <script>

        const searchRegion = () => {
            window.location.href = `/regiao/${document.getElementById('regions').value}`
        }

    </script>
</body>

</html>