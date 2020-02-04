<?php 
    include("common/header.php");
    include("common/menu.php");
    include("common/footer.php");
    include("functions.php");
?>

<h1>Cercle - Périmètre et Aire</h1>

<form action="" method="POST">
    <label for="rayon">Rayon d'un cercle :</label>
    <input type="number" min="1" name="rayon" id="rayon"><br />
    <label for="perimetre">Périmètre :</label>
    <input type="checkbox"name="perimetre" id="perimetre" checked><br />
    <label for="aire">Aire :</label>
    <input type="checkbox" name="aire" id="aire" checked><br />
    <button type="submit">valider</button>
</form>
<?php 
    if(isset($_POST['rayon']) && !empty($_POST['rayon'])){
        $rayon = $_POST['rayon'];
        echo '<h2>Résultat pour un cercle d\'un rayon de ' . $rayon . ' cm :</h2>';
        if(isset($_POST['perimetre'])){
            echo 'Le périmètre d\'un cercle d\'un rayon de <b>' . $rayon . ' cm</b> est : <b>' . ($rayon * 2 * pi()) . '</b><br />';
            echo '<br />';
        }
        if(isset($_POST['aire'])){
            echo 'L\'aire d\'un cercle d\'un rayon de <b>' . $rayon . ' cm</b> est : <b>' . ($rayon * $rayon * pi()) . '</b><br />';
            echo '<br />';
        }
            
    }else{
        echo '<h3>Veuillez saisir une valeur dans le champ ci-dessus</h3>';
    }
?>