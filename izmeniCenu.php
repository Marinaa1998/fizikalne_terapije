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
            <h1 class="text-center">Izmeni cenu fizikalne terapije</h1>
            <hr style="height: 1px;color: black;background-color: black;">
          </div>
      </div>
        <div class="row">
        <div class="col-md-5 mx-auto">
          <form method="POST" action="update.php">

            <label for="id"></label>
            <input type="hidden" class="form-control"  name="id" id="id" value="<?php echo $_GET['id']; ?>">

            <label for="cena">Cena</label>
            <input type="number" class="form-control" value="<?php echo $_GET['cena']; ?>"  name="cena" id="cena">

            <label for="dugme"></label>
            <input type="submit" class="form-control btn-primary" name="izmeni" id="dugme" value="Izmeni">
          </form>
			</div>
        </div>
        </div>
		</div>
		<?php include 'footer.php'; ?>
	
  
  </body>
  </html>