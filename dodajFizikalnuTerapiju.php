<?php include 'konekcija.php' ?>
<!doctype html>
<html lang="en">
  <head>
  <?php include 'header.php' ?>
   
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="description" content="" />
	  <meta name="keywords" content="" />
    <meta name="author" content="" />
    
    <title>Fizioterapije</title>
    
    <link rel="shortcut icon"  href="images/favicon.png" >
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/bootstrap.css">

  </head>
  <body>
    <div class="ponuda">
			<div class="container">
      <div class="title">
          <div class="col-md-12 mt-5">
            <h1 class="text-center">Dodaj fizikalnu terapiju</h1>
            <hr style="height: 1px;color: black;background-color: black;">
          </div>
      </div>
        <div class="row">
        <div class="col-md-5 mx-auto">
          <form method="POST" action="add.php" >
            <label for="nazivFizikalneTerapije">Naziv </label>
            <input type="text" class="form-control" placeholder="Unesi naziv fizikalne terapije" name="nazivFizikalneTerapije" id="nazivFizikalneTerapije" require>
            <label for="tip">Tip fizikalne terapije </label>
            <select name="tip" class="form-control"  id="tip" require>  
            </select>
            <label for="fizioterapeut">Fizioterapeut </label>
            <select name="fizioterapeut"  class="form-control"  id="fizioterapeut" require>
            </select>
            <label for="cena">Cena </label>
            <input type="number" class="form-control" placeholder="Unesite cenu fizikalne terapije" name="cena" id="cena" min="1000" max="10000" step="100" require />
            <label for="opis">Opis </label>
            <textarea id="opis" class="form-control" name="opis" rows="4" cols="50" placeholder="Unesite tekst" ></textarea>
            <label for="dugme"></label>
            <input type="submit" class="form-control btn-primary" name="sacuvaj" id="dugme" value="Sacuvaj">
          </form>
        </div>
        </div>
    </div>
    </div>
    <?php include 'footer.php'?>
    

  <script src="js/jquery.min.js"></script>


    <script>
    function popuniTip(){
      var zahtev = $.ajax({
          url: "kontroler.php",
          method: "GET",
          data: { opcija : 'tip' }
          });
          

        zahtev.done(function( json ) {
          var nalepi='';


          $.each($.parseJSON(json), function(idx, obj) {
                  nalepi += '<option value="'+obj.tipID+'">'+obj.nazivTipa+'</option>';
              });
          $("#tip").html(nalepi);

        });

    }

  </script>
  
  <script>
    function popuniFizioterapeuta(){
      var zahtev = $.ajax({
          url: "kontroler.php",
          method: "GET",
          data: { opcija : 'fizioterapeut' }
          });

        zahtev.done(function( json ) {
          var nalepi='';


          $.each($.parseJSON(json), function(idx, obj) {
                  nalepi+='<option value="'+obj.fizioterapeutID+'">'+obj.imePrezime+'</option>';
              });
          $("#fizioterapeut").html(nalepi);

        });

    }

    
  </script>
  <script>
    popuniTip();
    popuniFizioterapeuta();
  </script>
    
  </body>
</html>