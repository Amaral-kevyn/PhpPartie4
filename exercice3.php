<!--Exercice 3 Variable-->
<?php 
    $title = 'Exercice 3';
    include 'header.php';
    
?>
    <h1>Exercice 3</h1>
    <p><?php
    function Concat($firstTest,$secondText){
      $result = $firstTest." ".$secondText;
      return $result;
    };
    echo Concat('La boucle','est bouclé');
    ?></p>

<?php 
    include 'footer.php';
?>