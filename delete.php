<?php
include 'konekcija.php';
include 'model/tip.php';
include 'model/fizioterapeut.php';
include 'model/fizikalne_terapije.php';

  FizikalneTerapije::obrisi($mysqli,$_GET['id']);
  

  header("Location: upravljanjePodacima.php");


 ?>
