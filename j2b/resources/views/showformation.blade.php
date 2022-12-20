<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/showformation/{{$formation->id}}" method="get">
    <h1>formation</h1>
    <input type="hidden" name="id" value="{{ $formation->id }}">
            <div class="user">
                
                <div class="produit_header">
                    <h3 class="titre">{{ $formation->name }}</h3>
                    <h3 class="titre">{{ $formation->prix }}</h3>
                    <h3 class="price">{{ $formation->Durée }}</h3> 
                </div>
            </div>    
            
    </form>
</body>
</html>