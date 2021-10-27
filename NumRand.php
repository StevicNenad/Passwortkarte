<?php
    function fillCard(int $rows, int $cols){
        $table = array();
        
        for($i = 0; $i < ($rows * $cols); $i++){
            $table[$i] = charRand();
        }
        return $table;
    }

    function charRand(){
        (string)$lower = "qwertzuiopasdfghjklyxcvbnm";
        (string)$upper = "QWERTZUIOPASDFGHJKLYXCVBNM";
        (string)$nums = "1234567890";
        (string)$symbols = " !\"#$%'()*+,-./:;<=>?@[\]^_`&{|}~";
        $chosen_character = '';

        $choose_type = rand(1, 4);

        //echo "random number (1-4): " . $choose_type . "<br>";

        switch($choose_type){
            case 1:
                $chosen_character = $lower[rand(0, strlen($lower) -1)];
                break;
            case 2:
                $chosen_character = $upper[rand(0, strlen($upper) -1)];
                break;
            case 3:
                $chosen_character = $nums[rand(0, strlen($nums) -1)];
                break;
            case 4:
                $chosen_character = $symbols[rand(0, strlen($symbols) -1)];
                break;
        }

        //echo "generated character: " . $chosen_character . "<br>";
        return $chosen_character;
    }
?>