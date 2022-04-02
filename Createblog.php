<?php 
// Home-Seite
//session_start();  Sitzung starten
//include("30minutes.php"); // 30 Minuten Sitzung
//include("dblogins.php"); //Datenbank


echo '<!DOCTYPE html>';
echo '<html lang="en">'; 
echo '<head>'; // Start Kopfzeile
    echo '<meta charset="UTF-8">';
    echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '</head>'; //Ende Kopfzeile
    echo '<body>'; // Start body


// Navigationsbar
echo '<ul>';
echo '<a href="Home.php"><li>Home</li></a>'; // Home-Seite
echo '<a href="Login.php"><li>Login</li></a>'; // Login-Seite
echo '</ul>';
// Ende Navigationsbar

echo '<u><h1>Füllen Sie bitte das Formular aus!</h1></u>'; // Titel 

echo '<h5>Über welches Thema willst du schreiben?</h5>'; // Hinweis(eine Bitte)    
//echo '<form action="register_bestätigung.php" method="post">'; 

// Formular
// Befehl required erzwingt eine Eingabe. Sonst kann man ein Account erstellen

echo '<select>';
    echo '<option>Javascript</option>';
    echo '<option>SQL</option>';
    echo '<option>Java</option>';
    echo '<option>PHP</option>';
    echo '<option>C#</option>';
    echo '<option>C++</option>';
    echo '<option>html</option>';
    echo '<option>css</option>';
echo '</select>';
echo '<br>';
echo '<p>Datum: <input required type="date" name="datum"></p>'; //Feld um Datum auszuwählen
echo '<p>Blog Eintrag<br><textarea name="eintrag"></textarea></p>'; //Feld um den Blog Eintrag zu erstellen
echo '<input type="submit" name="abschicken" ><br>'; //abschicken
echo '<br>';
echo '<input type="reset" name="zurücksetzen" >'; //zurücksetzen
echo '<br>';
echo '</form>'; 
// Ende Formular

echo '</body>'; // Ende body
echo '</html>';  // Ende html
?>

