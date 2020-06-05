<!--Exercice 1 Variable-->
<?php 
    $title = 'Exercice 1';

    include 'header.php';
?>
    <h1>Exercice 1</h1>
    <p><?php 

    function Correct(){
        return true;
        }

    $result = Correct();
    echo $result;

    ?></p>
<?php 
    include 'footer.php';
?>