<?php
include 'konekcija.php';
include 'model/tip.php';
include 'model/fizioterapeut.php';
include 'model/fizikalne_terapije.php';


  $id = trim($_POST['id']);
  $cena = trim($_POST['cena']);

  FizikalneTerapije::izmeniCenu($mysqli,$cena,$id);

  header("Location: upravljanjePodacima.php");


 ?>
