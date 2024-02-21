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
        .p{
            font-style: italic
        }
    </style>
</head>
<body>

   
    <h1>Grazie {{ $newContact['name'] }}, <br>
    Didattica all'aperto ha ricevuto la vostra richiesta dinformazioni per progetti su misura
    </h1>
    <p class="p">Data di ricezione mail: {{ $newContact['created_at'] }}</p>
    <p><strong>Metodo di contatto scelto:</strong>
    @if ($newContact['method'] == 't')
        telefono
    
    @else
            
        email
    @endif
    </p>
   Sarà nostra premura ricontattarl al piu presto, buona giornata!
    
</body>
</html>