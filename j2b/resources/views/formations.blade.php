<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/formation.css')}}" rel="stylesheet">
    <title>Document</title>
</head>
<body >

@foreach ($formations as $formation)
<h4>formation</h4><br><br>
    <div class="formation">
        <div>{{ $formation->name}}</div>
        <div>{{ $formation->prix}}€</div>
        <div>{{ $formation->Durée}}</div>
        <div>{{ $formation->Description}}</div>
       
                   
                        
    </div>    
                   
@endforeach

</body>
</html>