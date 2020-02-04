<?php 
    include("common/header.php");
    include("common/menu.php");
    include("common/footer.php");
    include("functions.php");
?>

<h1>Affichage des tables de multiplication</h1>

<form action="" method="get">
    <label for="table">Choisissez un nombre :</label>
    <input type="number" name="table">
    <button type="submit">valider</button>
</form>
<?php 
    if(isset($_GET['table']) && !empty($_GET['table'])){
        $i = 0;
        echo '<h2>La table de ' . $_GET['table'] . ' :</h2>';
        for($i = 0; $i <= 10; $i++){
            $result = $i * $_GET['table'];
            echo $i . ' x ' . $_GET['table'] . ' = ' . $result . '<br />';
        }
    }else{
        echo '<h3>Veuillez saisir une valeur dans le champ ci-dessus</h3>';
    }
?>
