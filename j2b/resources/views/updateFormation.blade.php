<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('update-formation')}}" method="post" >
            @csrf
            <input type="hidden" name="id" value="{{ $formation->id }}">
            <label >name</label><input type="text" name="name"  value="{{$formation->name}}">
            <label >prix</label><input type="number" name="prix" value="{{$formation->prix}}" >
            <label >Durée</label><input type="number" name="Durée" value="{{$formation->Durée}}" >
            <label >Description</label><input type="text" id="Description" name="Description" value="{{$formation->Description}}" >
            <button autofocus type="submit">update</button>
         </form>
</body>
</html>