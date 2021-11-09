<?php
    include 'CharRand.php';

    /****
    *****Function that generates the Table header and footer. Takes "header" or "footer" and column amount as argument
    ****/
    function generateHeaderFooter($label, $cols){
        $first_char = $second_char = $third_char = 0;
        $head_foot_labeling = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

        echo ($label == "header") ? "<div class = \"thead\">" : "<div class = \"tfoot\">";

        //Loop that creates header and footer labels. Checks if $labels is "header" or "footer" and echoes the proper html command
        //Checks if letter "Z" has been reached and adds an additonal letter: ex. "Z" and then "AA", "ZZ" and then "AAA"
        for($i = 0; $i < $cols; $i++){
            if($i == 0) echo "<div class = \"header_footer_cell\"></div>";

            echo "<div class = \"header_footer_cell\">";

            if($third_char > 0) echo $head_foot_labeling[$third_char - 1];
            if($second_char > 0) echo $head_foot_labeling[$second_char - 1];
            echo $head_foot_labeling[$first_char];

            echo "</div>";

            $first_char++;

            //Adds a third letter Ex. "AAA"
            if($second_char == 26 && $first_char == 26){
                $third_char++;
                $second_char = 1;
                $first_char = 0;
            }
            //Adds a second letter Ex. "AA"
            else if($first_char == 26){
                $second_char++;
                $first_char = 0;
            }
        }
        echo "</div>";
    }

    /****
    *****Function that draws and Fills the Table.
    ****/
    function drawAndFillTable($rows, $cols){
        $passwordarray = createTableArray($rows, $cols);
        $iterator = 0;

        echo "<div class=\"table\">";
        generateHeaderFooter("header", $cols);

        //Nested for-loop that takes total number of columns and rows as arguments and starts filling the table
        for($line = 1; $line <= $rows; $line++){
            echo "<div class=\"trow\">";
            for($cell = 0; $cell <= $cols; $cell++){
                if($cell == 0) echo "<div class =\"row_cell\">" . $line . "</div>";
                else{
                    echo "<div class =\"symbol_cell\">" . $passwordarray[$iterator] . "</div>";
                    $iterator++;
                }
            }
            echo "</div>";
        }
        generateHeaderFooter("footer", $cols);
        echo "</div>";
    }
?>