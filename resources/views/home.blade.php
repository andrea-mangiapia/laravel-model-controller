<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Collezione Film</title>

    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    <h1>
        Collezione Film
    </h1>

    <div class="container">
        <div class="cards">
            @foreach ($movies as $movie)
    
                <div class="single-card">
                    <div>
                        <strong>Titolo:</strong> {{$movie->title}}
                    </div>
                    <div>
                        <strong>Titolo in lingua originale:</strong> {{$movie->original_title}}
                    </div>
                    <div>
                        <strong>Nazionalità:</strong> {{$movie->nationality}}
                    </div>
                    <div>
                        <strong>Data di uscita:</strong> {{$movie->date}}
                    </div>
                    <div>
                        <strong>voto:</strong> {{$movie->vote}}
                    </div>
                    
                </div>  
                
            @endforeach           
    
        </div>
    </div>

</body>
</html>