<?php
    include 'CharRand.php';

    /****
    *****Funktion welche Tabellen Header und Footer erstellt. Nimmt "header", "footer", und column anzahl als argument.
    ****/
    function generateHeaderFooter($label, $cols){
        $first_char = $second_char = $third_char = 0;
        $head_foot_labeling = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

        echo ($label == "header") ? "<thead class=\"thead\">" : "<tfoot class=\"thead\"><tr>";

        //Loop welcher header und footer label erstellt. Checkt ob $labels, "header" oder "footer" ist und echoet den passenden html command
        //Checkt ob das zeichen "Z" erreicht wurde und fügt ein zusätzliches zeichen hinzu: bsp. "Z" und dann "AA", "ZZ" danach "AAA"
        for($i = 0; $i < $cols; $i++){
            if($i == 0) echo ($label == "header") ? "<th></th>" : "<td></td>";
            echo ($label == "header") ? "<th>" : "<td>";

            if($third_char > 0) echo $head_foot_labeling[$third_char - 1];
            if($second_char > 0) echo $head_foot_labeling[$second_char - 1];

            echo $head_foot_labeling[$first_char];
            echo ($label == "header") ? "</th>" : "</td>";

            $first_char++;

            //Fügt einen dritten Buchstaben hinzu Ex. "AAA"
            if($second_char == 26 && $first_char == 26){
                $third_char++;
                $second_char = 1;
                $first_char = 0;
            }
            //Fügt einen zwieten Buchstaben hinzu Ex. "AA"
            else if($first_char == 26){
                $second_char++;
                $first_char = 0;
            }
        }
        echo ($label == "header") ? "</thead>" : "</tr></tfoot>";
    }

    /****
    *****Funktion die den Table erstellt und befüllt.
    ****/
    function drawAndFillTable($rows, $cols){
        $passwordarray = createTableArray($rows, $cols);
        $iterator = 0;

        echo "<table class=\"main_table\">";
        generateHeaderFooter("header", $cols);

        //Nested for-loop welcher die totale anzahl an spalten und zeilen als argument nimmt, startet das befüllen der tabelle.
        for($line = 1; $line <= $rows; $line++){
            echo "<tr class=\"symbol_cell\">";
            for($cell = 0; $cell <= $cols; $cell++){
                if($cell == 0) echo "<td class=\"row_cell\">" . $line . "</td>";
                else{
                    echo "<td>" . $passwordarray[$iterator] . "</td>";
                $iterator++;
                }
            }
            echo "</tr>";
        }
        generateHeaderFooter("footer", $cols);
        echo "</table>";
        drawUserNoteField($cols);
    }

    /****
    *****Funtkion welche ein Feld für die Startposition und Email des Benutzers erstellt.
    ****/
    function drawUserNoteField($cols) {
        echo "<table><tr class=\"user_notes\"><td>Startkoordinaten(z.B.&nbsp;J7):";
        for($i = 0; $i < 15; $i++) echo "&nbsp;";
        echo "Website&nbsp;(gmail.com):";
        for($i = 0; $i < 50; $i++) echo "&nbsp;";
        echo "</td></tr><table>";
    }
?>