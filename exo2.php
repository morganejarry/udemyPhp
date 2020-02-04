<?php 
    include("common/header.php");
    include("common/menu.php");
    include("common/footer.php");
    include("functions.php");
?>

<h1>Affichage d'une pyramide</h1>
<form action="" method="POST">
    <label for="pyramide">Hauteur de la :</label>
    <input type="number" min="1" name="pyramide">
    <button type="submit">valider</button>
</form>
<?php 
    if(isset($_POST['pyramide']) && !empty($_POST['pyramide'])){
        $hauteur = $_POST['pyramide'];
        echo '<h2>Pyramide d\'une hauteur de ' . $hauteur . ' :</h2>';
        $txt = "";
        for($i = 0 ; $i < $hauteur ; $i++){
            $txt .= "xx";
            echo $txt . "<br />";
        }
        for($i = 0 ; $i < $hauteur-1 ; $i++){
            $txt = substr($txt, 0, strlen($txt)-2);
            echo $txt. "<br />";
        }
    }else{
        echo '<h3>Veuillez saisir une valeur dans le champ ci-dessus</h3>';
    }
?>