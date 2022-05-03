<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/app.css">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            font-family: 'Akshar', sans-serif;
            font-family: 'Roboto Mono', monospace;
        }

        
    </style><br><center>
    <h1 >
        Paises de la region
    </h1><br>
    </center>
    <table id="a" class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th class="text-info" > Pais </th>
                <th> Capital </th>
                <th class="text-danger"> Moneda </th>
                <th> Poblacion </th>
                <th class="text-success"> Ciudades </th>
                
            </tr>
        </thead>
        <tbody> 
            @foreach($paises as $pais => $infopais)
                <tr>
                    <td  rowspan="{{ count($infopais['ciudades']) }}" >
                        {{ $pais }}
                    </td>
                    <td class="text-success" rowspan="{{ count($infopais['ciudades']) }}" >
                    {{    $infopais["capital"]  }}
                    </td>
                    <td class="text-info" rowspan="{{ count($infopais['ciudades']) }}">
                    {{    $infopais["moneda"]  }}
                    </td>
                    <td class="text-danger"  rowspan="{{ count($infopais['ciudades']) }} ">
                    {{    $infopais["poblacion"]  }}
                    </td>
                    @foreach($infopais["ciudades"] as $ciudad)
                    <th class="bg-success">
                        {{ $ciudad }}
                    </th>
                    </tr>
                    @endforeach
            @endforeach

        </tbody>
        <tbody></tbody>
        <tbody></tbody>
    </table>


</body>
</html>