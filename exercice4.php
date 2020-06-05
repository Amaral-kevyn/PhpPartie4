<!--Exercice 4 Variable-->
<?php 
  
    $title = 'Exercice 4';
    include 'header.php';
?>
    <h1>Exercice 4</h1>
    <p><?php
        
        function Analyse($firstNumber,$secondNumber){
            if($firstNumber > $secondNumber ){
                echo 'Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième';

            }else if($firstNumber < $secondNumber ){
                echo 'Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième';

            }else{
                echo 'Les deux nombres sont identiques si les deux nombres sont égaux';
            }
        }
        
        echo Analyse(1,4);
    ?></p>

<?php 
    include 'footer.php';
?>