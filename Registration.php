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
echo '<a href="Login.php"><li>Zurück</li></a>'; // Login-Seite
echo '<a href="Home.php"><li>Home</li></a>'; // Home-Seite
echo '<a href="Logout.php"><li>Logout</li></a>'; // Abmelden
echo '</ul>';
// Ende Navigationsbar

echo '<u><h1>Registrieren</h1></u>'; // Titel 

echo '<h5>Erstellen Sie bitte einen Account!</h5>'; // Hinweis(eine Bitte)    
//echo '<form action="register_bestätigung.php" method="post">'; 

// Fromular
// Befehl required erzwingt eine Eingabe. Sonst kann man ein Account erstellen
//echo '<form action="check.php" method="POST">';// Datei check.php wird ausgeführt
echo '<select>'; // Optionen für Geschlecht auswählen
    echo '<option>männlich</option>';
    echo '<option>weiblich</option>';
echo '</select> <br>'; // Ende Optionen
echo '<br>';
echo '<input type="number" required name="number"  placeholder="Alter"></input> <br>'; // Alter bestimmen
echo '<br>';
echo '<input type="password" required name="benutzername"  placeholder="Benutzername:"></input> <br>'; // benutzername eingeben
echo '<br>';
echo '<input type="password" required name="vorname"  placeholder="Vorname:"></input> <br>'; // vorname
echo '<br>';
echo '<input type="password" required name="nachname"  placeholder="Nachname:"></input> <br>'; //nachname
echo '<br>';
echo '<input type="password" required name="email"  placeholder="E-Mail"></input> <br>'; //E-Mail
echo '<br>';
echo '<input type="password" required name="pw"  placeholder="Passwort:"></input> <br>'; //Passwort
echo '<input type="submit" name="anmelden"/>'; 
echo '<br>';
echo '</form>'; 
// Ende Formular

echo '</body>'; // Ende body
echo '</html>';  // Ende html
?>

