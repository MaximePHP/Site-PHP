<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=u559000742_site', 'u559000742_maxou', 'Bea97clo');
?>
<html>
   <head>
      <title>Profil</title>
      <meta charset="utf-8">
   </head>
   <body>
         <h2>Bienvenue</h2>
         <br /><br />
         <p>C'est un profil</p>
         <br />
         <p>BLA ... BLA ... BLA...</p>
         <br />
         <a href="editionprofil.php">Editer mon profil</a>
         <a href="deconnexion.php">Se déconnecter</a>
   </body>
</html>