<?php class Tip {

public $tipID = 0;
public $nazivTipa = '';

public static function getAll($mysqli){
    $result = $mysqli->query('SELECT * FROM tip');

    $tipovi = array();

    while($row = $result->fetch_assoc()) {

        $tip = new Tip();
        $tip->tipID= $row['tipID'];
        $tip->nazivTipa = $row['nazivTipa'];


        array_push($tipovi, $tip);
    }

    return $tipovi;
}

} ?>
