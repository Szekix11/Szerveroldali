<?php

class FormElement {

    public $azonosito;

    public $nev;

    public $ertek;

    public $cimke;

    public function __construct($azonosito, $nev, $ertek, $cimke) {y
        $this->azonosito = $azonosito;
        $this->nev = $nev;
        $this->ertek = $ertek;
        $this->label= $cimke;
    }

    public function generateHTML() {
        return "<label for='$this->azonosito'>$this->cimke:</label>
                <input type='text' id='$this->azonosito' name='$this->nev' value='$this->ertek'><br>";
    }
}

class TextInput extends FormElement {
    public function generateHTML() {
        return "<label for='$this->azonosito'>$this->cimke:</label>
                <input type='text' id='$this->azonosito' name='$this->nev' value='$this->ertek'><br>";
    }
}

class PasswordInput extends FormElement {
    public function generateHTML() {
        return "<label for='$this->azonosito'>$this->cimke:</label>
                <input type='password' id='$this->azonosito' name='$this->nev'><br>";
    }
}

class kuldesgomb extends FormElement {
    public function generateHTML() {
        return "<input type='submit' id='$this->azonosito' name='$this->nev' value='$this->ertek'><br>";
    }
}

$felhasznalonevmezo = new TextInput("username", "username", "", "Felhasználónev");
$jelszo1 = new PasswordInput("password1", "password1", "Jelszó", "Jelszó");
$jelszo2 = new PasswordInput("password2", "password2", "Jelszó újra", "Jelszó újra");
$kuldesgomb = new kuldesgomb("submit", "submit", "Regisztráció", "Regisztráció");

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta nev="description" content="Házi feladat 1">
    <meta nev="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisztráció</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        form {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
        }

        label{
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        label{
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="regisztracio.php" method="post">
        <h1 style="text-align: center;">Regisztráció</h1>
        <?php echo $felhasznalonevmezo->generateHTML(); ?>
        <?php echo $jelszo1->generateHTML(); ?>
        <?php echo $jelszo2->generateHTML(); ?>
        <?php echo $kuldesgomb->generateHTML(); ?>
    </form>
</body>
</html>
