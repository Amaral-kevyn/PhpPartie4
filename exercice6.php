<!--Exercice 6 Variable-->
<?php 
    $title = 'Exercice 6';

    include 'header.php';
?>

<h2>Exercice 5</h2>
  <p>
    <?php
      function Concaten($firstname,$lastname,$age){
         $result = 'Bonjour '.$lastname." ".$firstname." ".', tu as ' .$age. ' ans.';
            return $result;
      };
       echo Concaten('kev','swagg',27);
    ?>
  </p>
      
<?php 
    include 'footer.php';
?>