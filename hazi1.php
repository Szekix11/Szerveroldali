<!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8" >
<meta name="author" content="Szekeres Alex Patrik">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Házi feladat 1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Üzenetek</title>
</head>

<body>
<style>
      

        .uzenet-doboz {
            padding: 13px;
            margin: 15px;
            width: 340px;
            display: flex;
            justify-content: center;
            align-items: center;
           
        }
        body {
            font-family: Arial;
            display: flex;
            justify-content: center;
            
         
            
        }
        

    .info {
    background-color: green;
    color: white;
    }
    .veszely {
     background-color: yellow;
        color: black;
            }
    .hiba {
    background-color: red;
    color: white;
        }
    </style>


    <?php
    function uzenetmegjelenites($uzenet, $tipus = 'info') 
    {
        switch ($tipus) 
        {
            case 'info':
                $class = 'info';
                break;

            case 'figyelmeztetes':
                $class = 'veszely';
                break;

            case 'hiba':
                $class = 'hiba';
                break;

            default:
                $class = 'info';
        }
        echo "<div class='uzenet-doboz $class'>$uzenet</div>";
    }

   
    uzenetmegjelenites('Fontos infó');
    uzenetmegjelenites('Vigyázz veszély','figyelmeztetes');
    uzenetmegjelenites('Váratlan hiba történt','hiba');
    
?>
</body>
</html>
