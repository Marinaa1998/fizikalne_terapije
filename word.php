<?php
    $connect = mysqli_connect("127.0.0.1", "root", "", "fizikalne_terapije");
    $output = '';
    if(isset($_POST["export_word"]))
    {
        $sql = "SELECT * FROM fizikalne_terapije ft JOIN tip t ON ft.tipID=t.tipID JOIN fizioterapeut f ON ft.fizioterapeutID=f.fizioterapeutID ORDER BY ft.fizioterapijeID";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) > 0)
        {
            $output .= '
                <h1>Fizikalne terapije</h1>
                <table class="table text-left" bordered = "2" style="background-color:#f5aedb;color:black; font-weight:bold; font-size:20px">
                <tr>
                    <th>ID</th>
                    <th>Naziv</th>
                    <th>Tip</th>
                    <th>Fizioterapeut</th>
                    <th>Cena</th>
                    <th>Opis</th>
                </tr>
            ';
            while($row = mysqli_fetch_array($result))
            {
                $output .= '
                    <tr>
                        <td>' .$row["fizioterapijeID"].'</td>
                        <td>' .$row["nazivFizioTerapije"].'</td>
                        <td>' .$row["nazivTipa"].'</td>
                        <td>' .$row["imePrezime"].'</td>
                        <td>' .$row["cena"].'</td>
                        <td>' .$row["opis"].'</td>
                    </tr>
                ';
            }
            $output .= '</table>';
            header("Content-Type: application/vnd.ms-word");
            header("Content-Disposition: attachment; filename = fizikalne_terapije.doc");
            echo $output;
        }
    }
?>