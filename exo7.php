<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<h1>Tableaux</h1>
<h2>Etape 1</h2>
<p>Réaliser un tableau contenant les valeurs : 2, 6, 12, 5, 26, 34, 40, 60.</p>
<h2>Etape 2</h2>
<p>Réaliser une fonction qui vérifie si un tableau ne contient que des valeurs paires ou non.</p>
<h2>Etape 3</h2>
<p>Afficher un message pour l'indiquer à l'utilisateur.</p>
<?php
    $tab = [2, 6, 12, 5, 26, 34, 40, 60];
    
    if(checkTableau($tab)){
        echo '<h3>le tableau ne contien que des valeurs paires.</h3>';
    }else{
        echo '<h3>Le tableau contient des valeurs impaires.</h3>';
    }

    function checkTableau($tableau){
        for($i = 0; $i <= count($tableau)-1; $i++){
            if($tableau[$i] % 2 !== 0){
                return false;
            }
        }
        return true;
    }
?>
<?php 
    include("common/footer.php");
    
?>