<!--Exercice 8 Variable-->
<?php 
    $title = 'Exercice 8';

    include 'header.php';
    
?>

<h2>Exercice 7</h2>
    <p>
        <?php
            function Subtotal($first,$second,$third){
                $result = $first + $second + $third;
                return $result;
            }

            echo Subtotal(6,8,154);

        ?> 
    </p> 
      
<?php 
    include 'footer.php';
?>