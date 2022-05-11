<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Paises Agogo</title>
</head>
<body>
    <h2>Paises Tercer Mundistas</h2>
    <table class="table table-bordered border-primary" >
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Capital</th>
                <th>Moneda</th>
                <th>Poblacion</th>
                <th>Ciudades</th>
            </tr>
        </thead>
        <tbody>
            @foreach($paises as $pais => $infopais)
            <tr>
                <td class="text-primary" rowspan ='{{ count($infopais["ciudades"]) }}'><b> {{ $pais }}</td>
                <td class="text-secundary" rowspan ='{{ count($infopais["ciudades"]) }}'><b> {{ $infopais["cap"] }}</td>
                <td class="text-danger" rowspan ='{{ count($infopais["ciudades"]) }}'> {{ $infopais["mon"] }}</td>
                <td class="text-warning" rowspan ='{{ count($infopais["ciudades"]) }}'> {{ $infopais["pob"] }} Millones de Habitantes</td>
                @foreach($infopais["ciudades"] as $ciudad)
                <td class="text-success"> {{ $ciudad }}</td>
                </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
    
</body>
</html>