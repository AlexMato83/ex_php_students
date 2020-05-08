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
       function printAvg($array){
         $avg = 0;
         echo "voti: ";
         foreach ($array as $value) {
           echo $value . " ";
           $avg += $value;
         }
         $avg /= count($array);
         return $avg;
       }
       function printData($arraytwo){
         $inputName = $_GET["name"];

         foreach ($arraytwo as $valueTwo) {
             $name = $valueTwo["name"];
             $lastname = $valueTwo["lastname"];
             $scores = $valueTwo["scores"];
             if ($name === $inputName){
               echo $name . " " . $lastname . "<br>";
               $avg = printAvg($scores);
               echo "<br>media voti: " . $avg . "<br>";
               echo "------<br>";
             }

         }
       }
       printData($class);




    ?>
  </body>
</html>
