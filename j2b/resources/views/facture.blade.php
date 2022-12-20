<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/ab2155e76b.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>

    <title>facture</title>
</head>
<body>

    <form action="{{ route('add-facture')}}" method="post">
    @csrf
        <label>N° d'affaire:</label><br>
            <input type="number" name="N°Affaire" required><br>
        <label>N° de stage:</label><br>
            <input type="number" name="N°deStage" required><br>
        <label>N° BDC:</label><br>
            <input type="number" name="N°BDC" required><br>
        <label>N° de facture:</label><br>
            <input type="number" name="numéro_facture" required><br>
        <label for="nom_formation">Le nom de la formation </label>
            <select name="nom_formation"  >
                @foreach($formations as $formation)
                    <option value="{{$formation->name}}">{{ $formation->name }}<option>
                @endforeach
            </select><br>
        <label for="nom_comedien">Le nom de la formation </label>
            <select name="nom_comedien"  >
                @foreach($users as $user)
                    <option value="{{$user->name}}">{{ $user->name }}<option>
                @endforeach
            </select>
        <label for="nom_entreprise">Le nom de l'entreprise </label>
            <select name="nom_entreprise"  >
                @foreach($entreprises as $entreprise)
                    <option value="{{$entreprise->name}}">{{ $entreprise->name }}<option>
                @endforeach
            </select>  
        <label for="Adress_entreprise">Adress de l'entreprise</label>
            <select name="Adress_entreprise"  >
                @foreach($entreprises as $entreprise)
                 <option value="{{$entreprise->Adress}}">{{ $entreprise->Adress}}<option>
                @endforeach
            </select>  
        <label>La ville ou se déroule la formation:</label><br>
            <input type="text" name="ville_formation" required><br>
        <label>L'objet de la facture:</label><br>
            <input type="text" name="objet_facture" required><br>
            <div><h2>Calculer la distance</h2>
        <label for="départ">Départ:</label>
        <input type="text"  name="départ" id="départ" class="form-control"><br>
        <label for="arrivée">Arrivée:</label>
        <input type="text"  name="arrivée" id="arrivée" class="form-control">
        <div>
        <br><div id="output">
            </div></div>
             <label for="dist">distance</label>
            <input type="text" id="dist" name="distance" class="form-control">
            <br>
            <label for="dur">durée</label>
            <input type="text" id="dur" name="durée" class="form-control">
            <br>
            
            <label for="indemnité_kilométrique">"indemnité kilométrique"</label>
            <input  id="prix" name="indemnité_kilométrique" class="form-control">
            
            <br> <br><br>
            <label for="carburant">Carburant:</label>
        <input type="number"  name="carburant" id="carburant" class="form-control"><br>
        <label for="péage">péage:</label>
        <input type="number"  name="péage" id="péage" class="form-control">
        <br>
        <button onclick="JavaScript:return calcRoute()">Calculer</button>
        <br><br>
        <label for="total">total</label>
        <input type="number"  name="total" id="total" class="form-control">
        <br><br>

       <button type="submit" >Add</button>
    </form>
    



    
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuDynld9yqVTXrVVT8ObLSQ0B9P4ZvW28&libraries=places&callback=initMap">
</script>


<script>

    //calcul distance
function calcRoute() {

	//créer la request
	var request = {
		origin: document.getElementById("départ").value,
		destination: document.getElementById("arrivée").value,
		travelMode: google.maps.TravelMode.DRIVING, 
		unitSystem: google.maps.UnitSystem.METRIC,
	}
var map;
var dis;
   directionsService = new google.maps.DirectionsService();
	directionsService.route(request, function (result, status) {
		if (status == google.maps.DirectionsStatus.OK) {

			//afficher la distance
			 dis=document.getElementById("dist").value=result.routes[0].legs[0].distance.text;
			document.getElementById("dur").value=result.routes[0].legs[0].duration.text ;

            var a = document.getElementById("dist").value.split(/(\s+)/);
           
            //document.getElementById("prix").value=a[0];
            if(a[0]<=100){
                document.getElementById("prix").value=55;

            }
            else if (a[0]>=101 && a[0]<=505){
                document.getElementById("prix").value=165;
            }
            else if (a[0]>=506 && a[0]<900){
                document.getElementById("prix").value=225;
            }
            else {
                document.getElementById("prix").value=275;
            }


            var prix = document.getElementById("prix").value;
            var péage = document.getElementById("péage").value;
            var carburant = document.getElementById("carburant").value;
            
          

            document.getElementById("total").value=((prix*2)+(carburant*1.544*2)+(péage*2)).toFixed(2);
			//dessine la route
            ;
			directionsDisplay.setDirections(result);
            
		} 
      
	});
return false;
}


</script>



<script>
google.maps.event.addDomListener(window, 'load', initialize);
function initialize() {
var input = document.getElementById('départ');
var autocomplete = new google.maps.places.Autocomplete(input);
autocomplete.addListener('place_changed', function() {
var place = autocomplete.getPlace();

});

var input2 = document.getElementById('arrivée');
var autocomplete2 = new google.maps.places.Autocomplete(input2);
autocomplete2.addListener('place_changed', function() {
var place = autocomplete2.getPlace();

});
}
</script>
</body>
</html>


