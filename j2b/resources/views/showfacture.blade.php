<!DOCTYPE html>
<html lang="en">
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Facture</title>
        <script src="{{asset('js/pdf.js')}}"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
     
  </head>
  <body class=facture>
      
  

    <div class="canvas_div_pdf">   
    <form action="/generate/{{ $facture->id }}" method="get">
    <input type="hidden" name="id" value="{{ $facture->id }}">
        <div class="haut">
            <div class="J2B">
                <img src="{{asset('img/j2blogo')}}" width="320px"><br>
                <div class="desc">
                    <p> 17, rue Louis </p>
                    <p>92160 ANTONY</p>
                    <p>emma.brunat@gmail.com</p>
                    <p>06 81 76 95 03</p>
                    <p>N° TVA Intra. FR17481413847</p>
                </div>
            </div>
            <div class="hautdroite">
                <div class="entreprise">
                    <p>{{$facture->nom_entreprise}}</p>
                    <p>{{$facture->Adress_entreprise}}</p>
                </div>
                <div class="numero">
                    <p>N°D'affaire : {{$facture->N°Affaire}}</p><br>
                    <div class="p">
                        <span>N°de stage :</span>
                        <span style="font-weight:bold"> {{$facture->N°deStage}}</span>
                    </div>
                    <p>N°BDC : {{$facture->N°BDC}}</p>
                </div>
            </div>
        </div>
        <div class="facdate">
            <div class="numfac">
                <p>Numero de facture : {{$facture->numéro_facture}}</p>
            </div>
            <div class="date">
                <p> Réalisé le : "Date" </p>
            </div>
        </div>
        <p class=mid>{{$facture->nom_entreprise}} - {{$facture->ville_formation}} - N°d'affaire : {{$facture->N°Affaire}} - Date - Emma Brunat</p>
        <table class="designation">
            <tr>
                <th>Désignation</th>
                <th>Prix Unitaire</th>
                <th>Nombre de jours</th>
                <th>TVA</th>
                <th>Montant HT</th>
            </tr>
            <tr>
                <td>{{$facture->nom_entreprise}} - {{$facture->ville_formation}} - {{$facture->N°Affaire}} - Date </td>
                <td>1,00 €</td>
                <td>1</td>
                <td>20%</td>
                <td>1,00 €</td>
            </tr>
            <tr>
                <td>forfait frais kilometrage</td>
                <td>1,00 €</td>
                <td>1</td>
                <td>20%</td>
                <td>1,00 €</td>
            </tr>
            <tr></tr>
        </table>
        <div class="inf">
            <table class="info">
                    <tr>
                        <td rowspan="3"><p>En cas de retard de paiement,
                            seront exigibles
                            , conformément à l'article L 441-6 du code de commerce
                            , une indemnité calculée sur la base de trois fois le taux de l'intérêt légal en vigueur 
                            ainsi qu'une indemnité forfaitaire pour frais de recouvrement de 40€.</p></td>
                            <td class=inftd>TOTAL HT</td>
                            <td class=inftd>2€</td>
                    </tr>
                    <tr>
                        <td class=inftd>TVA 20%</td>
                        <td class=inftd>0,40 €</td>
                    </tr>
                    <tr>
                        <td class=inftd>TOTAL TTC</td>
                        <td class=inftd>2,40 €</td>
                    </tr>
            </table>
        </div>
        <p style="text-align:left">En votre aimable règlement à 30 jours en date de réception de notre facture.</p>
        <div class="sarl">
        <p>SARL au capital de 10000 € inscrite au RCS de Nanterre – 481 413 847</p><p>N° TVA Intra. FR17481413847</p>
        </div>
        <div class="Note de frais">
            <h3>Note de frais</h3>
            <div class="Itinéraire calculé">
                <h4>
                Itinéraire calculé
                </h4>
                <p>Départ :{{$facture->départ}}</p>
                <p>Arrivée : {{$facture->arrivée}}</p>
                <p>Durée : {{$facture->durée}}</p>
                <p>Distance :{{$facture->distance}}</p>
                <h4>
                Note de frais
                </h4>
                <p>Vehicule: {{$facture->vehicule}}</p>
                <p>Carburant : B7 (Gazole) (1.544 €/L) - {{$facture->carburant}}L</p>
                <p>Péage : {{$facture->péage}}€</p>
                <p>Indemnité kilométrique:{{$facture->indemnité_kilométrique}}  €</p>
            </div>
            <p>total:{{$facture->total}}</p>

        </div>
    </form>
    </div>
<button onclick="getPDF()">generate</button>

    </body>
    <script>
        document.getElementById
    </script>
</html>