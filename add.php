<?php
include 'konekcija.php';
include 'model/tip.php';
include 'model/fizioterapeut.php';
include 'model/fizikalne_terapije.php';


  $nazivFizikalneTerapije = trim($_POST['nazivFizikalneTerapije']);
  $cena = trim($_POST['cena']);
  $tip = trim($_POST['tip']);
  $fizioterapeut = trim($_POST['fizioterapeut']);
  $opis=trim($_POST['opis']);

  FizikalneTerapije::sacuvaj($mysqli,$nazivFizikalneTerapije,$cena,$tip,$opis,$fizioterapeut);
  header("Location: index.php");


 ?>
