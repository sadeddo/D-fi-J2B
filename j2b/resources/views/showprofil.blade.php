<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/showprofile/{{$user->id}}" method="get">
    <h1>Profil</h1>
    <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="user">
                <img src="{{ asset('/img/'.$user->image)}}"  >
                <div class="produit_header">
                    <h3 class="titre">{{ $user->name }}</h3>
                    <h3 class="titre">{{ $user->Adress }}</h3>
                    <h3 class="price">{{ $user->Numero_Téléphone }}</h3> 
                </div>
            </div>    
            
    </form>
   
         <form action="/showprofil" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden"  value="{{ $user->image }}">
            <input type="hidden" name="id" value="{{ $user->id }}">
            <label >Adress</label><input type="number" name="Adress"  value="{{$user->Adress}}">
            <label >name</label><input type="text" name="name" value="{{$user->name}}" >
            <label >Numero_Téléphone</label><input type="text" name="Numero_Téléphone" value="{{$user->Numero_Téléphone}}" >
            <label >Image</label><input type="file" id="images" name="image"  >
            <button autofocus type="submit">update</button>
         </form>
</html>