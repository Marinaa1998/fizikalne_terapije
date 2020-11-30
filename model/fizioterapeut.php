<?php class Fizioterapeut {

public $fizioterapeutID = 0;
public $imePrezime = '';

public static function getAll($mysqli){
    $result = $mysqli->query('SELECT * FROM fizioterapeut');

    $fizioterapeuti = array();

    while($row = $result->fetch_assoc()) {

        $fizioterapeut = new Fizioterapeut();
        $fizioterapeut->fizioterapeutID= $row['fizioterapeutID'];
        $fizioterapeut->imePrezime = $row['imePrezime'];


        array_push($fizioterapeuti, $fizioterapeut);
    }

    return $fizioterapeuti;
}

} ?>
