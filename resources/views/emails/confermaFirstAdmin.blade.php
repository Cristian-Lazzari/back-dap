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
        .btn-mail{
            padding: 5px 10px;
            border-radius: 5px;
            border: 2px solid black;
            background-color: rgba(6, 76, 6, 0.278)
        }
        .btn-call{
            padding: 5px 10px;
            border-radius: 5px;
            border: 2px solid black;
            background-color: rgba(23, 6, 76, 0.278)
        }
    </style>
</head>
<body>


    <h1>IL Sigr/ra {{ $newContact['name'] }} ha richiesto informazioni per un progetto su misura</h1>
    <p>Data ricezione email: {{ $newContact['creted_at'] }}</p>
    
    @if ($newContact['message'])
        
    <hr>
    <h4>Il suo messaggio:</h4>
    <p class="mes"> {{$newContact['message']}}</p>
    @endif    
    <hr>
    <p><strong>Metodo di contatto scelto:</strong>
        @if ($newContact['method'] == 't')
            telefono
        @else
            email
        @endif
        </p>
    <p>Contatta {{$newContact['name']}}
    
        <a class="btn-call" href="tel:{{$newContact['phone']}}" class="btn btn-danger">Chiama {{$newContact['name']}}</a>
        <a class="btn-mail" href="mailto:{{$newContact['email']}}" class="btn btn-danger">Scrivi una mail a {{$newContact['name']}}</a>
    </p>
</body>
</html>