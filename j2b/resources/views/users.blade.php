<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/admin.css')}}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  
<table class="users">
  <h1>Users</h1>
 <thead>
  <tr>
   <th>name</th>
   <th>Adress</th>
   <th>email</th>
   <th>delete</th>
   <th>Update</th>
  </tr>
 </thead>
 <tbody>
 @foreach($users as $user)
    <tr >
     
      <td>{{$user->name}} </td>
      <td>{{$user->Adress}} </td>
      <td>{{$user->email}} </td>
    
      <td><a href="{{ route('destroy-user',$user->id)}}" class="btn btn-danger" value="Delete">delete</a></td>
      <td><a href="{{ route('profil.show',$user->id)}}" class="btn btn-danger" value="Delete">show</a></td>

    </tr>
 @endforeach
 </tbody>
</table>

<table class="formations">
  <h1>formations</h1>
 <thead>
  <tr>
   <th>name</th>
   <th>prix</th>
   <th>Durée</th>
   <th>Description</th>
   <th>show</th>
   
  </tr>
 </thead>
 <tbody>
 @foreach($formations as $formation)
    <tr >
     
    <td>{{ $formation->name}}</td>
        <td>{{ $formation->prix}}€</td>
        <td>{{ $formation->Durée}}</td>
        <td>{{ $formation->Description}}</td>
        <td><a href="{{ route('show.formation',$formation->id)}}" class="btn btn-danger" value="Delete">show</a></td> 
    </tr>
 @endforeach
 </tbody>
</table>
<a href="{{route('nouvelle-formation')}}" class="btn btn-danger" value="Delete">add</a>

<table class="entreprise">
  <h1>entreprise</h1>
 <thead>
  <tr>
   <th>name</th>
   <th>numéro_de_téléphone</th>
   <th>SIRET</th>
   <th>Adress</th>
   <th>show</th>
   
  </tr>
 </thead>
 <tbody>
 @foreach($entreprises as $entreprise)
    <tr >
     
    <td>{{ $entreprise->name}}</td>
        <td>{{ $entreprise->numéro_de_téléphone}}</td>
        <td>{{ $entreprise->SIRET}}</td>
        <td>{{ $entreprise->Adress}}</td>
        <td><a href="{{ route('show.entreprise',$entreprise->id)}}" class="btn btn-danger" value="Delete">show</a></td>
       
    

</tr>
 @endforeach
 </tbody>
</table>
<a href="{{route('nouvelle-entreprise')}}" class="btn btn-danger" value="Delete">add</a>
</body>
</html>