<?php
  include 'konekcija.php';
  include 'model/tip.php';
  include 'model/fizioterapeut.php';
  include 'model/fizikalne_terapije.php';

  if(isset($_GET['opcija'])){
      if($_GET['opcija'] == 'tip'){
          echo json_encode(Tip::getAll($mysqli));
      }
      if($_GET['opcija'] == 'fizioterapeut'){
          echo json_encode(Fizioterapeut::getAll($mysqli));
      }
      if($_GET['opcija'] == 'fizikalne_terapije'){
          echo json_encode(FizikalneTerapije::getAll($mysqli));
      }
      if($_GET['opcija'] == 'sort'){
          echo json_encode(FizikalneTerapije::vratiSveSortirano($mysqli,$_GET['sort']));
    }
  }

 ?>
