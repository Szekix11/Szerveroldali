<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-10">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Házi feladat 4</title>
</head>
<body>
<?php
        class Hibak extends Exception {};

        class IntervalException extends Exception {};

        class ClosedInterval {
        private $kezdopont;
         private $vegpont;

        function __construct($kezdopont, $vegpont) {
        if (!isset($kezdopont, $vegpont)) {
            throw new ArgumentCountError("Adj meg két paramétert (kötelező)!");
        }
        if ($kezdopont > $vegpont) {
            throw new IntervalException("Hiba észlelés! A kezdopont végpont nem lehet nagyobb, mint a vegpont végpont!");
        }

        $this->kezdopont = $kezdopont;
        $this->vegpont = $vegpont;
        }

        function toString(){
        echo "<p> [".$this->kezdopont.",".$this->vegpont."]</p>";
        }

        function contains($szam) {
        return ($szam >= $this->kezdopont && $szam <= $this->vegpont);
        }
        }
        try {
            $elso = new ClosedInterval(10, 20);
            echo $elso->toString();
            $szamellenorzes = 12;
            if ($elso->contains($szamellenorzes)) {
                echo "$szamellenorzes benne van az intervallumban.";
            } else {
                echo "$szamellenorzes nincs benne az intervallumban.";
            }
        } catch (ArgumentCountError $i) {
            echo $i->getMessage();
            error_log("Üzenet Hiba! ".$i->getMessage()." ".$i->getFile()." (".$i->getLine().")", 20, "./hibak_hazi4.log");
        } catch (IntervalException $i) {
            echo $i->getMessage();
            error_log("Üzenet Hiba! ".$i->getMessage()." ".$i->getFile()." (".$i->getLine().")", 20, "./hibak_hazi4.log");
        }
        
        try {
            $masodik = new ClosedInterval(20, 6);
        } catch (IntervalException $i) {
            echo $i->getMessage();
            error_log("Üzenet Hiba! ".$i->getMessage()." ".$i->getFile()." (".$i->getLine().")", 20, "./hibak_hazi4.log");
        } catch (Exception $i) {
            echo $i->getMessage();
            error_log("Üzenet Hiba! ".$i->getMessage()." ".$i->getFile()." (".$i->getLine().")", 20, "./hibak_hazi4.log");
        }
        
        try {
            $harmadik = new ClosedInterval(20);
        } catch (ArgumentCountError $i) {
            echo $i->getMessage();
            error_log("Üzenet: Hiba! ".$i->getMessage()." ".$i->getFile()." (".$i->getLine().")", 20, "./hibak_hazi4.log");
        } catch (Exception $i) {
            echo $i->getMessage();
            error_log("Üzenet: Hiba! ".$i->getMessage()." ".$i->getFile()." (".$i->getLine().")", 20, "./hibak_hazi4.log");
        }
        ?>
        
        </body>
        </html>
                