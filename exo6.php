<?php 
    include("common/header.php");
    include("common/menu.php");
?>

<h1>Selection du personnage</h1>
<form action="" method="POST">
    <label for="perso">Personnage : </label>
    <select name="perso" id="perso" size="1">
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
    </select>
    <input type="submit" value="valider">
</form>

<?php
    if(isset($_POST['perso'])){
        if($_POST['perso'] === "homme"){
            echo '<img src="sources/images/player.png" alt="joueur homme">';
        }elseif($_POST['perso'] === "femme"){
            echo '<img src="sources/images/playerf.png" alt="joueur femme">';
        }
    }else {
        echo '<h3>Veuillez saisir une valeur ci-dessus.</h3>';
    }
?>

<?php 
    include("common/footer.php");
    
?>