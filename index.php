<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/master.css">
    <title></title>
    <?php
     include "prova.php";
     ?>
  </head>
  <body>

   <?php
    foreach ($class as $students) {
      $voti = $students["scores"];
      echo $students["name"] . "<br>"
          . $students["lastname"] . "<br>";
      //ciclo i voti degli alunni
      $avg = 0;
       foreach ($voti as $voto) {
         // richiamo funzione per stampare i voti
         // printVotes($voto);
         echo "voto" . $voto . " ";
         $avg += $voto;
         }
       // stampo somma voti di ogni alunno
       echo "<br>somma dei voti= " . $avg;
       // stampo media $voti
       echo "<br>media voti: " . $avg / count($voti);
       // stampo numero dei voti di ogni alunno
       echo "<br>numero voti: " .count($voti);
       // stampo media dei voti di ogni alunno
       echo "<br>media voti: " ;

       echo "<br>------<br>";
    }
    // funzione per stampare i voti
    // function printVotes($voto){
    //
    //   echo "voto" . $voto . " ";
    //   // salvo var per somma voti
    //
    //   $avg += $voto;
    // }
    ?>
  </body>
</html>
