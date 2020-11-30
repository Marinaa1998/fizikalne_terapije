<?php include 'konekcija.php'; ?>
<!doctype html>
<html lang="en">
  <head>
  <?php include 'header.php' ?>
   
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="description" content="" />
	  <meta name="keywords" content="" />
    <meta name="author" content="" />
    
    <title>Fizioterapije</title>
        
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="shortcut icon"  href="images/favicon.png" >

  </head>

  <body>

  <div class="ponuda">
  <div class="container">
      <div class="title">
          <div class="col-md-12 mt-5">
            <h1 class="text-center">Upravljanje podacima</h1>
            <hr style="height: 1px;color: black;background-color: black;">
          </div>
      </div>
        <div class="row">
        <div class="col-md-11 mx-auto">
          <div id="ponuda">
          </div>
		   
        </div>
        </div>
   </div>
   </div>
   <?php include 'footer.php'?>
   
  <script src="js/jquery.min.js"></script>
	

  <script>
    function vratiPodatke(){
      var zahtev = $.ajax({
          url: "kontroler.php",
          method: "GET",
          data: { opcija : 'fizikalne_terapije' }
          });

        zahtev.done(function( json ) {
          var nalepi='<table class="table table-hover">';
          nalepi+='<thead>';
          nalepi+='<tr>';
          nalepi+='<th>Naziv</th>';
          nalepi+='<th>Tip</th>';
          nalepi+='<th>Fizioterapeut</th>';
          nalepi+='<th>Cena</th>';
          nalepi+='<th>Opis</th>';
          nalepi+='<th>Izmeni</th>';
          nalepi+='<th>Obriši</th>';
          nalepi+='</tr>';
          nalepi+='</thead>';
          nalepi+='<tbody>';

          $.each($.parseJSON(json), function(idx, obj) {
                  nalepi+='<tr>';
                  nalepi+='<td>'+obj.nazivFizikalneTerapije+'</td>';
                  nalepi+='<td>'+obj.tip.nazivTipa+'</td>';
                  nalepi+='<td>'+obj.fizioterapeut.imePrezime+'</td>';
                  nalepi+='<td>'+obj.cena+' RSD </td>';
                  nalepi+='<td>'+obj.opis+'  </td>';
                  nalepi+='<td><a href="izmeniCenu.php?id='+obj.fizikalne_terapijeID+'&cena='+obj.cena+'" class="btn btn-info" style="font-size:22px"><i class="fa fa-refresh"></i></a></td>';
                  nalepi+='<td><a href="delete.php?id='+obj.fizikalne_terapijeID+'" <button class="btn btn-danger" style="font-size:22px"><i class="fa fa-trash-o"></i></button></a></td>';
                  nalepi+='</tr>';
              });

            nalepi+='</tbody>';
            nalepi+='</table>';

          $("#ponuda").html(nalepi);

        });

    }
  </script>
  <script>
    vratiPodatke();
  </script>
  
</body>
</html>

