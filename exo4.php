<?php 
    include("common/header.php");
    include("common/menu.php");

    session_start();
    if(!isset($_SESSION["chiffreAleatoire"])){
        $_SESSION["chiffreAleatoire"] = rand(1,10);
    }
?>

<h1>Trouver le nombre choisi par l'ordinateur</h1>
<form action="#" method="POST">
    <input type="hidden" name="reinit" value="yes">
    <input type="submit" value="Reinitialiser">
</form>
<form action="#" method="POST">
    <label for="chiffre">Quel est le chiffre : </label>
    <input type="number" name="chiffre" id="chiffre"><br/>
    <input type="submit" value="Valider">
</form>

<?php
    if(isset($_POST['reinit']) && $_POST['reinit'] ==="yes"){
        $_SESSION["chiffreAleatoire"] = rand(1,10);
    }
    $chiffreAlea = $_SESSION["chiffreAleatoire"];


    if(isset($_POST['chiffre']) && $_POST['chiffre'] >0){
        $chiffreSaisi = (int)$_POST['chiffre'];
        echo "<h2>";
        if($chiffreAlea === $chiffreSaisi){
            echo "C'est gagné";
        } else {
            if($chiffreAlea > $chiffreSaisi){
                echo "Le chiffre est plus grand";
            } else {
                echo "Le chiffre est plus petit";
            }
        }
        echo "</h2>";
    } else {
        echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
    }
?>

<?php 
    include("common/footer.php");
    
?>