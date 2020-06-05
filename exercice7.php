<!--Exercice 7 Variable-->
<?php 
    $title = 'Exercice 3';

    include 'header.php';

?>

<h2>Exercice 7</h2>
    <p>
        <?php
            function who($gender,$age){

            if($age < 18 && $gender == 'Homme'){
       
                echo 'Vous êtes un homme et vous êtes mineur';

            }else if($age > 18 && $gender == 'Homme'){
       
                echo 'Vous êtes un homme et vous êtes majeur';

            }else if($age < 18 && $gender == 'Femme'){
       
                echo 'Vous êtes une femme et vous êtes mineur';

            }else if ($age > 18 && $gender == 'Femme'){
        
                echo 'Vous êtes une femme et vous êtes majeur';
            }}
        ?>
    </p>
         <?php
         
        echo who('Femme',12);
    ?>

<?php 
    include 'footer.php';
?>