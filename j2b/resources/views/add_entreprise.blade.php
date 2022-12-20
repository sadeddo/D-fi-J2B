<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<form action="{{route('nouvelle-entreprise')}}" method="post" >
                    @csrf
                    
                            <label>Nom de l'entreprise:</label><br>
                            <input type="text" name="name" required><br>
                            <label for="numéro_de_téléphone">numéro de téléphone:</label><br>
                            <input type="number" id="numéro_de_téléphone" name="numéro_de_téléphone" step="any"required><br>
                            <label for="SIRET">SIRET</label><br>
                            <input type="number" id="SIRET" name="SIRET" step="any"required><br>
                            <label for="autocomplete"> Location/City/Address </label>
                            <input type="text" name="autocomplete" id="autocomplete" class="form-control" placeholder="Select Location">
                            <label for="Adress">Adress:</label><br>
                            <input type="text" id="Adress" name="Adress" required placeholder="Select Location"><br>
                            <button type="submit" value="ajouter">ajouter</button>
                            <br><br>
                        </div>
                    </div>
        </form>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
<script 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuDynld9yqVTXrVVT8ObLSQ0B9P4ZvW28&libraries=places&callback=initMap">
</script>
<script>
$(document).ready(function() {
$("#lat_area").addClass("d-none");
$("#long_area").addClass("d-none");
});
</script>
<script>
google.maps.event.addDomListener(window, 'load', initialize);
function initialize() {
var input = document.getElementById('Adress');
var autocomplete = new google.maps.places.Autocomplete(input);
autocomplete.addListener('place_changed', function() {
var place = autocomplete.getPlace();

// --------- show lat and long ---------------
$("#lat_area").removeClass("d-none");
$("#long_area").removeClass("d-none");
});
}
</script>
</html>