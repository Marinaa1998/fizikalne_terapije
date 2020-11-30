<?php class FizikalneTerapije {

	public $fizikalne_terapijeID=0;
	public $nazivFizikalneTerapije='';
	public $tip=0;
	public $fizioterapeut=0;
	public $cena=0;
	public $opis='';


	
	public static function getAll($mysqli)
    {
        $result = $mysqli->query('SELECT * from fizikalne_terapije ft join tip t on ft.tipID=t.tipID join fizioterapeut f on ft.fizioterapeutID=f.fizioterapeutID');

		$fizikalne_terapije = array();
		while($row = $result->fetch_assoc()) {
			$tip = new Tip();
			$tip->tipID= $row['tipID'];
      		$tip->nazivTipa= $row['nazivTipa'];

			$fizioterapeut = new Fizioterapeut();
			$fizioterapeut->fizioterapeutID= $row['fizioterapeutID'];
			$fizioterapeut->imePrezime  = $row['imePrezime'];

			$fizikalna_terapija = new FizikalneTerapije();
			$fizikalna_terapija->fizikalne_terapijeID= $row['fizioterapijeID'];
			$fizikalna_terapija->nazivFizikalneTerapije= $row['nazivFizioTerapije'];
			$fizikalna_terapija->tip= $tip;
			$fizikalna_terapija->fizioterapeut= $fizioterapeut;
			$fizikalna_terapija->cena= $row['cena'];
			$fizikalna_terapija->opis= $row['opis'];
      
			
			array_push($fizikalne_terapije, $fizikalna_terapija);
    	}

    	return $fizikalne_terapije;
	}

	public static function sacuvaj($mysqli,$nazivFizikalneTerapije,$cena,$tip,$opis,$fizioterapeut){
	$nazivFizikalneTerapije = mysqli_real_escape_string($mysqli,$nazivFizikalneTerapije);
    $cena = mysqli_real_escape_string($mysqli,$cena);
    $tip = mysqli_real_escape_string($mysqli,$tip);
	$fizioterapeut = mysqli_real_escape_string($mysqli,$fizioterapeut);
	$opis=mysqli_real_escape_string($mysqli,$opis);

		$result = $mysqli->query("INSERT INTO fizikalne_terapije(nazivFizioTerapije,cena,tipID,fizioterapeutID,opis)
			values ('$nazivFizikalneTerapije', '$cena', '$tip', '$fizioterapeut','$opis')");

		if ($result > 0) return true; else return false;
	}

	

	public static function izmeniCenu($mysqli,$cena,$id){
		$cena = mysqli_real_escape_string($mysqli,$cena);
	
	
		$sql="UPDATE fizikalne_terapije SET cena=".$cena." where fizioterapijeID=".$id;
	
			$result = $mysqli->query($sql);
	
			return true;
	}
	
	public static function obrisi($mysqli,$id){
	
			$result = $mysqli->query("DELETE FROM fizikalne_terapije where fizioterapijeID=".$id);
			
	
			return true;
	}

	
	

} ?>