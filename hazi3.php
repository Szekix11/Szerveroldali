<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Szekeres Alex Patrik">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta nev="description" content="Házi feladat 3">
    <meta nev="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ovicsopi</title>
</head>

<body>
    <?php

    class Ovicsopi
    {
        private $tomb;
        function __construct()
        {
        $this->tomb = array();
        }
        function UjOvisGyerek($jel, $nev)
        {
            $jel = strtolower($jel); 
            foreach ($this->tomb as $k => $e) {
                if ($k == $jel) {
                    
                    echo "Már van ilyen jelű ovis!<br>";
                    return false;
                }
            }
            $this->tomb[$jel] = $nev;
            return true;
        }


                function toString()
                {
                 foreach ($this->tomb as $k => $e) {
                echo " " . $k . ": " . $e . "<br>";
                    }
                }

        function Jelkereses($jel)
        {
            $jel = strtolower($jel);
            if (isset($this->tomb[$jel])) {
                return $this->tomb[$jel];
            } else {
                return "Nem található ilyen jelű ovis!";
            }
        }

        function Nevkereses($Keresesnev)
        {
            $talalatok = array();
            foreach ($this->tomb as $jel => $nev) {
                if (stripos($nev, $Keresesnev) !== false) {
                    $talalatok[$jel] = $nev;
                }
            }
            return $talalatok;
        }
        }

        $ovoda = new Ovicsopi();

         $ovoda->UjOvisGyerek("létra", "Pistike");
            $ovoda->UjOvisGyerek("labda", "Évike");
                $ovoda->UjOvisGyerek("alma", "Mekk");
                    $ovoda->UjOvisGyerek("alma", "Elek"); 
                        $ovoda->UjOvisGyerek("Fa", "Anna");

        echo "Ovoda csoport tagjai:<br>";
        echo $ovoda->toString();
        echo "<br>";

        $jelkereses = "alma";
        $talalat = $ovoda->Jelkereses($jelkereses);
        echo "Keresés jel alapján: ($jelkereses): $talalat<br>";

        $Keresesnev = "Elek";
        $talalatok = $ovoda->Nevkereses($Keresesnev);
        echo "Keresés név alapján: ($Keresesnev):<br>";
        foreach ($talalatok as $jel => $nev) {
        echo "$jel: $nev<br>";
        }
        ?>

</body>
</html>
