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
    
    <link rel="shortcut icon"  href="..images/favicon.png" >
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  
  <body style="background-image: url('images/pozadina.jpg'); background-size:cover">

  <div class="container">
      <div class="title">
          <div class="col-md-12 mt-5">
            <h1 class="text-center">Fizioterapija</h1>
            <hr style="height: 1px;color: black;background-color: black;">
          </div>
      </div>
        <div class="row">
        <div class="col-md-5 mx-auto">
        <?php
          include 'konekcija1.php';
          $model=new Model();
          $id=$_REQUEST['id'];
          $row=$model->prikazID($id);
           if(!empty($row)){

        ?>
          <div class="card">
            <div class="card-header">
              Prikaz fizikalne terapije
            </div>
            <div class="card-body">
              <p>ID: <?php echo $row['fizioterapijeID']; ?></p>
              <p>Naziv: <?php echo $row['nazivFizioTerapije'];?></p>
              <p>Tip: <?php echo $row['nazivTipa']; ?></p>
              <p>Fizioterapeut: <?php echo $row['imePrezime']; ?></p>
              <p>Cena: <?php echo $row['cena']; ?></p>
              <p>Opis: <?php echo $row['opis']; ?></p>
            </div>
          </div>
          <?php
           }else{
             echo "Nema podataka";
           }
           ?>

          <a class="nav-link" href="index.php">
            <button type="submit"   name="nazad" class="btn btn-primary">Nazad</button>
          </a>
        </div>
      </div>
    </div>

    

  </body>
  </html>