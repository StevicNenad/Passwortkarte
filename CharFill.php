<?php
    include 'CharRand.php';

    function generateHeaderFooter(string $label, int $cols){
        $first_char = 0;
        $second_char = 0;
        $third_char = 0;
        $head_foot_labeling = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

        echo ($label == "header") ? "<thead>" : "<tfoot><tr>";

        for($i = 0; $i < $cols; $i++){
            if($i == 0) echo ($label == "header") ? "<th></th>" : "<td></td>";
            echo ($label == "header") ? "<th>" : "<td>";
            if($third_char > 0) echo $head_foot_labeling[$third_char - 1];
            if($second_char > 0) echo $head_foot_labeling[$second_char - 1];
            echo $head_foot_labeling[$first_char];
            echo ($label == "header") ? "</th>" : "</td>";

            $first_char++;

            if($second_char == 26 && $first_char == 26){
                $third_char++;
                $second_char = 1;
                $first_char = 0;
            }
            else if($first_char == 26){
                $second_char++;
                $first_char = 0;
            }
        }
        echo ($label == "header") ? "</thead>" : "</tr></tfoot>";
    }

    /***
    ***/
    function drawAndFillTable($rows, $cols){
        $passwordarray = createTableArray($rows, $cols);
        $iterator = 0;
        $char_amount = 0;

        echo "<table>";

        generateHeaderFooter("header", $cols);

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

        generateHeaderFooter("footer", $cols);

        echo "</table>";
    }
?>