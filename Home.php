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
echo '<a href="Login.php"><li>Login</li></a>'; // Login-Seite
echo '<a href="Logout.php"><li>Logout</li></a>'; // Abmelden
echo '<a href="Createblog.php"><li>create blog</li></a>'; // Blog erstellen-Seite
echo '<a href="Chat.php"><li>Chat</li></a>'; // Chat-Seite
echo '<a href="Kontakt.php"><li>Kontakt</li></a>'; // Kontakt-Seite
echo '</ul>';
// Ende Navigationsbar


echo '<u><h1>Welcome</h1></u>'; // Titel 


// Navigationsbar Programmiersprachen
echo '<ul>';
echo '<a href="Javascript.php"><li>Javascript</li></a>'; 
echo '<a href="SQL.php"><li>SQL</li></a>'; 
echo '<a href="Java.php"><li>Java</li></a>'; 
echo '<a href="PHP.php"><li>PHP</li></a>';
echo '<a href="C#.php"><li>C#</li></a>'; 
echo '<a href="C++.php"><li>C++</li></a>'; 
echo '<a href="html.php"><li>html</li></a>'; 
echo '<a href="css.php"><li>css</li></a>'; 
echo '</ul>';
// Ende Navigationsbar Programmiersprachen



echo '</body>'; // Ende body
echo '</html>';  // Ende html
?>

