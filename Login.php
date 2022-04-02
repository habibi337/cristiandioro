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
    echo '<u><h1><p style="text-align: center;">Login</p></h1></u>'; //Titel der Seite
    echo '</head>'; //Ende Kopfzeile
    echo '<body>'; // Start body


// Navigationsbar
echo '<ul>';
echo '<a href="Registration.php"><li>Registrieren</li></a>'; // Registrieren-Seite
echo '<a href="Logout.php"><li>Logout</li></a>'; // Abmelden
echo '</ul>';
// Ende Navigationsbar




// Registrations-Daten
// Fromular
//echo '<form action="check.php" method="POST">';// Datei check.php wird ausgeführt
echo 'E-Mail: <input type="email" name="email" placeholder="E-Mail" required><br>'; //Feld um Benutzername einzugeben
echo '<br>';
echo 'Passwort: <input type="password" name="pw" placeholder="Passwort:" required><br>'; //Feld um Passwort einzugeben
echo '<br>';
echo '<button name="submit">Login</button>';// Login Knopf
echo  '</form>';
// Ende Fromular




echo '</body>'; // Ende body
echo '</html>';  // Ende html
?>

