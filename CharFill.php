<?php
    include 'CharRand.php';
    /*
    **Function that fills a table array with random symbols using charRand() and returns it. Takes total number of rows and columns as parameters
    */
    function createTableArray(int $rows, int $cols){
        $table = array();
        
        //Fills array with symbols
        for($i = 0; $i < ($rows * $cols); $i++){
            $table[$i] = charRand();
        }
        return $table;
    }
?>