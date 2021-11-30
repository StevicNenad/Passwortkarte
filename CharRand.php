<?php
    /***
    ****Funktion die ein zufälliges Zeichen ausgibt aus vier verschiedenen Zeichentypen (Grossbuchstaben, Kleinbuchstaben, Zahlen und Sonderzeichen)
    ***/
    function charRand(){
        //Jedes Zeichen wurde in einem array gespeichert. Mit Strings werden die Zeichen falsch formatiert
        $lower = array("q", "w", "e", "r", "t", "z", "u", "i", "o", "p", "a", "s", "d", "f", "g", "h", "j", "k", "l", "y", "x", "c", "v", "b", "n", "m", "ä", "ö", "ü", "é", "è", "à");
        $upper = array("Q", "W", "E", "R", "T", "Z", "U", "I", "O", "P", "A", "S", "D", "F", "G", "H", "J", "K", "L", "Y", "X", "C", "V", "B", "N", "M", "Ä", "Ö", "Ü", "É", "È", "À");
        $nums = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
        $symbols = array("§", "+", "\"", "*", "ç", "%", "&", "/", "(", ")", "=", "'", "^", "¨", "$", "-", ".", ",", "<", ">", ";", ":", "_", "£", "!", "`", "?", "¦", "@", "#", "°", "§", "¬", "|", "¢", "´", "~", "]", "}", "{", "[", "\\", "€");
        $chosen_character = '';

        //Zufällige zahl zwischen 1 und 4 wird generiert
        $choose_type = rand(1, 4);

        //Anhand $choose_type wird ein Zeichentyp (Grossbuchstaben, Kleinbuchstaben, Zahlen und Sonderzeichen) ausgewählt
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
    ****Funktion die einen Array erstellt mit der charRand() Methode 
    ****Funktion nimmt zwei Argumente entgegen: Die gesamtanzahl von Zeilen und Spalten
    ***/
    function createTableArray($rows, $cols){
        $table = array();
        
        //For-loop der den Array mit Zeichen füllt
        for($i = 0; $i < ($rows * $cols); $i++){
            $table[$i] = charRand();
        }
        return $table;
    }
?>