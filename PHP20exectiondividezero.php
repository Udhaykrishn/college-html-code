<?php
    
    try{
        $numerator = 10;
        $denominator = 1;
        if($denominator === 0){
            throw new Exception("Divsion by zero error");
        }else{
            $result = $numerator / $denominator;
            echo "Result of Divion: ". $result ." <br>";
        }
        
        $dateString = "2023-12-25";
        $dateFormat = 'Y-m-d';

        $date = DateTime::createFromFormat($dateFormat,$dateString);

        if(!$date || $date->format($dateFormat) !== $dateString){
            throw new Exception("Invalide date formaat");
        }
        echo "Date is valid: ".$dateString;
    }catch(Exception $e){
        echo "Error: ".$e->getMessage();
    }
    
    ?>