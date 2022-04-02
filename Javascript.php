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
    echo '<u><h1><p style="text-align: center;">Javascript</p></h1></u>'; //Titel der Seite
    echo '</head>'; //Ende Kopfzeile
    echo '<body>'; // Start body


// Navigationsbar
echo '<ul>';
echo '<a href="Home.php"><li>Home</li></a>'; // Home-Seite
echo '<a href="Chat.php"><li>Zurück</li></a>'; // Zurück
echo '</ul>';
// Ende Navigationsbar




// Registrations-Daten
// Fromular
//echo '<form action="check.php" method="POST">';// Datei check.php wird ausgeführts
echo '<br>';
echo '<p><br><textarea name="eintrag"></textarea></p>'; //Feld für textt
echo '<br>';
echo '<button name="submit">Submit</button>';
echo  '</form>';
// Ende Fromular




echo '</body>'; // Ende body
echo '</html>';  // Ende html
?>

