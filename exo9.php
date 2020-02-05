<?php 
    include("common/header.php");
    include("common/menu.php");

    $p1 = [
        "Nom" => "Luke",
        "Age" => 27,
        "Sexe" => "Homme",
        "Force" => 5,
        "Agilite" =>4
    ];
    $p2 = [
        "Nom" => "Katy",
        "Age" => 22,
        "Sexe" => "Femme",
        "Force" => 3,
        "Agilite" =>6
    ];
    $p3 = [
        "Nom" => "Marc",
        "Age" => 33,
        "Sexe" => "Homme",
        "Force" => 7,
        "Agilite" =>2
    ];
?>

<h1>Selection du personnage</h1>
<form action="#" method="POST">
    <label for="perso">Personnage : </label>
    <select name="perso" id="perso" onChange = "submit()">
        <option value="p1" <?php if(isset($_POST['perso']) && $_POST['perso'] === "p1") echo "selected"?>>Luke</option>
        <option value="p2" <?php if(isset($_POST['perso']) && $_POST['perso'] === "p2") echo "selected"?>>Katy</option>
        <option value="p3" <?php if(isset($_POST['perso']) && $_POST['perso'] === "p3") echo "selected"?>>Marc</option>
    </select> <br/>
</form>

<h2> Personnage : </h2>
<?php 
    if(!isset($_POST['perso']) || $_POST['perso'] === "p1"){
        echo "<div class='gauche'>";
            echo "<img src = 'sources/images/player.png' alt = 'player Luke' />";
        echo "</div>";
        echo "<div class='gauche'>";
            afficherPerso($p1);
        echo "</div>";
    } else if($_POST['perso'] === "p2"){
        echo "<div class='gauche'>";
            echo "<img src = 'sources/images/playerF.png' alt = 'player Katy' />";
        echo "</div>";
        echo "<div class='gauche'>";
            afficherPerso($p2);
        echo "</div>";
    }else if($_POST['perso'] === "p3"){
        echo "<div class='gauche'>";
            echo "<img src = 'sources/images/playerM.png' alt = 'player Marc' />";
        echo "</div>";
        echo "<div class='gauche'>";
            afficherPerso($p3);
        echo "</div>";
    }
    echo "<div class='clearB'></div>";

    function afficherPerso($personnage){
        foreach($personnage as $index => $value){
            echo "<b>".$index."</b> : ". $value . "<br/>";
        }
    }
?>
<?php 
    include("common/footer.php");
?>