<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<h1>Calculer une moyenne</h1>
<form action="#" method="GET">
    <label for="notes">Nombre de notes : </label>
    <input type="number" min="0" name="notes" id="notes">
    <input type="submit" value="Ajouter">
</form>

<?php
    if(isset($_GET['notes']) && $_GET['notes'] >0){
        $notes = $_GET['notes'];
        echo '<p>Inscrire les notes pour calculer la moyenne :</p>';
        echo '<form action="" method="POST">';
        for($i = 1; $i < $notes; $i++ ){
            echo '<label for="note' . $i . '">Note ' . $i . ' : ';
            echo '<input type="number" min="0" max="20" name="note' . $i . '" id="note' . $i . '">';
            echo '<br />';
        }
        echo '<input type="submit" value="Calculer">';
        echo '</form>';
    }else{
        echo '<h3>Veuillez saisir une valeur dans le champ ci-dessus</h3>';
    }

    if(isset($_GET['note1'])){
       echo 'La moyenne est :';

    }else{
        echo '<h3>Veuillez saisir la/les note(s)</h3>';
    }
?>

<?php 
    include("common/footer.php");
    
?>