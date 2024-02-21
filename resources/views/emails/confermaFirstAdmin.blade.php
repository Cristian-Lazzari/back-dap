<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conferma Email</title>
    <style>
        *{
            margin: 0;
            padding: 5px;
            box-sizing: border-box;
        }
        .mes{
            font-style: italic;
            padding: 15px 0;
        }
        hr{
            padding: 1px !important;
        }

        img{
            width: 120px;
            margin: 0 auto;
        }
    </style>
</head>
<body>


    <h1>IL Sigr/ra {{ $newContact['name'] }} ha richiesto informazioni per un progetto su misura</h1>
    <p>Data ricezione email: {{ $newContact['creted_at'] }}</p>
    
    <span style="font-size: 35px; font-weight:bolder">{{$newContact['n_person']}}</span>
    @if ($newContact['message'])
        
    <hr>
    <h4>Il suo messaggio:</h4>
    <p class="mes"> {{$newContact['message']}}</p>
    @endif    
    <hr>
    
    <p>Contatta {{$newContact['name']}}</p>
    <a href="tel:{{$newContact['phone']}}" class="btn btn-danger">Chiama {{$newContact['name']}}</a>
</body>
</html>