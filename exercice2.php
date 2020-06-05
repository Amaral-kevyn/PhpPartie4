<!--Exercice 2 Variable-->
<?php 
    $title = 'Exercice 2';
    include 'header.php';
    
?>

    <h1>Exercice 2</h1>

    <p><?php
       function Show($name){
        return $name;
        };
        
        echo show('le chemin est bouché');

    ?></p>

<?php 
    include 'footer.php';
?>