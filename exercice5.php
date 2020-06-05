<!--Exercice 5 Variable-->
<?php 
    $title = 'Exercice 5';

    include 'header.php';
?>

<h2>Exercice 5</h2>
    <?php
      function Concatener($number,$name){
        $result = $number." ".$name;
        return $result;
      };
      echo Concatener(6,'booby');
      ?></p>
      
<?php 
    include 'footer.php';
?>