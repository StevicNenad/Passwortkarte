<?php
    include 'CharRand.php';
    /***
    ***/
    function drawAndFillTable(){
        $rows = 15;
        $cols = 48;
        $header_footer = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $passwordarray = createTableArray($rows, $cols);
        $iterator = 0;
        $char_amount = 1;

        echo "<table>";
            echo "<th></th>";

        for($i = 1; $i <= $cols; $i++){
            echo "<th>";
            for($ii = 1; $ii <= $char_amount; $ii++){
                echo $header_footer[$iterator];
            }
            echo "</th>";
            $iterator++;
            if($iterator == 25){
                $iterator = 0;
                $char_amount++;
            }
        }

        $iterator = 0;

        for($line = 1; $line <= $rows; $line++){
            echo "<tr>";
            for($cell = 0; $cell <= $cols; $cell++){
                if($cell == 0) echo "<td>" . $line . "</td>";
                else{
                    echo "<td>" . $passwordarray[$iterator] . "</td>";
                $iterator++;
                }
            }
            echo "</tr>";
        }

        $iterator = 0;
            echo "<tfoot>";
                echo "<tr>";

        for($i = 0; $i <= $cols; $i++){
            if($i == 0) echo "<td></td>";
            else {echo "<td>" . $header_footer[$iterator] . "</td>";
                $iterator++;
                if($iterator == 25) $iterator = 0;
            }
        }
                echo "</tr>";
            echo "</tfoot>";
        echo "</table>";
    }
?>