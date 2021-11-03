<?php
    /***
    ****Function that returns one random character out of 4 possible character types (Uppercase, Lowercase, Numbers and Symbols).
    ***/
    function charRand(){
        //Every symbol saved in an array. Does not work when using strings instead (symbol gets wrong format)
        $lower = array("q", "w", "e", "r", "t", "z", "u", "i", "o", "p", "a", "s", "d", "f", "g", "h", "j", "k", "l", "y", "x", "c", "v", "b", "n", "m", "ä", "ö", "ü", "é", "è", "à");
        $upper = array("Q", "W", "E", "R", "T", "Z", "U", "I", "O", "P", "A", "S", "D", "F", "G", "H", "J", "K", "L", "Y", "X", "C", "V", "B", "N", "M", "Ä", "Ö", "Ü", "É", "È", "À");
        $nums = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
        $symbols = array("§", "+", "\"", "*", "ç", "%", "&", "/", "(", ")", "=", "'", "^", "¨", "$", "-", ".", ",", "<", ">", ";", ":", "_", "£", "!", "`", "?", "¦", "@", "#", "°", "§", "¬", "|", "¢", "´", "~", "]", "}", "{", "[", "\\", "€");
        $chosen_character = '';

        //Picks one of the four character types at random
        $choose_type = rand(1, 4);

        switch($choose_type){
            case 1:
                $chosen_character = $lower[rand(0, sizeof($lower) -1)];
                break;
            case 2:
                $chosen_character = $upper[rand(0, sizeof($upper) -1)];
                break;
            case 3:
                $chosen_character = $nums[rand(0, sizeof($nums) -1)];
                break;
            case 4:
                $chosen_character = $symbols[rand(0, sizeof($symbols) -1)];
                break;
        }
        return $chosen_character;
    }

    /***
    ****Function that fills an array with random symbols using charRand() and returns it. 
    ****Takes total number of rows and columns as parameters
    ***/
    function createTableArray(int $rows, int $cols){
        $table = array();
        
        //Fills array with symbols
        for($i = 0; $i < ($rows * $cols); $i++){
            $table[$i] = charRand();
        }
        return $table;
    }
?>