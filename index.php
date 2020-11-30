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

    
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/lightbox.css">
    
    

  </head>
  
  <body style="background-image: url('images/pozadina.jpg'); background-size:cover">
  <div class="main">
    <p style="color:#f5aedb; margin-left:20px; font-weight:bold; font-size:25px; ">Pretražite fizioterapije:  </p> 
    <p style="color:black; margin-left:20px;font-size:18px ">  
            <input id="myInput" type="text" placeholder="Pretraži..">
            <br><br>
    </p>
    <div class="work">
    <div class="row">
    <div class="col-md-12">
    <div class="container">
      <div id="ponuda">
        <table class="table text-left" style="background-color:#f5aedb ">
        <thead>
        <tr>
        <th> RB.</th>
        <th> Naziv</th>
        <th> Tip</th>
        <th> Fizioterapeut</th>
        <th> Cena</th>
        <th> Opis</th>
        </tr>
        </thead>
        <tbody id="myTable">
    
    <?php 
      include 'konekcija1.php';
      $model=new Model();
      $rows=$model->fetch();
      $i=1;
      if(!empty($rows)){
          foreach($rows as $row){
      ?>
          <tr>
          <td><?php echo $i++;?></td>
          <td><?php echo $row['nazivFizioTerapije'];?></td>
          <td><?php echo $row['nazivTipa'];?></td>
          <td><?php echo $row['imePrezime'];?></td>
          <td><?php echo $row['cena'];?></td>
          <td><?php echo $row['opis'];?></td>
          <td>
          <a href="prikaz.php?id=<?php echo $row['fizioterapijeID']; ?>" class="btn btn-info btn-lg">
          Prikaži</a>
          </td>
          </tr>
      <?php
          }
      }else{
          echo "Nema podataka";
      }
      ?>
    </tbody>
    <br>
    </table>
    
    </div>
    </div>
	  </div>
    </div>
  
  </div>
  <form action = "word.php" method = "post" style="text-align: center">
        <input type="submit" name="export_word" class="btn btn-sucess" style="color: black;font-size:20px; background-color: pink; border: 3px solid white;" value="Napravi word tabelu"/>
  </form>
  <?php include 'footer.php'; ?>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
  <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("tbody tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
</script>

  
</body>
</html>