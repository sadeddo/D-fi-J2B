<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add_formation</title>
</head>
<body>
<form action="{{route('nouvelle-formation')}}" method="post" >
                    @csrf
                    
                            <label>Nom de la formation:</label><br>
                            <input type="text" name="name" required><br>
                            <label for="prix">Prix:</label><br>
                            <input type="number" id="prix" name="prix" step="any"required><br>
                            <label for="Durée">La durée en jour</label><br>
                            <input type="number" id="Durée" name="Durée" step="any"required><br>
                            <label>succinte description:</label><br>
                            <input type="text" id="Description" name="Description" required><br>
                            <button type="submit" value="ajouter">ajouteDescription</button>
                            <br><br>
                        </div>
                    </div>
        </form>

    
</body>
</html>