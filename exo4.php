
<?php
include("../common/header.php");
include("../common/menu.php");

$chiffreAlea = 5;
?>

<h1>Trouver le nombre choisi par l'ordinateur</h1>
<form action="#" method="POST">
    <label for="chiffre">Quel est le chiffre : </label>
    <input type="number" name="chiffre" id="chiffre"><br/>
    <input type="submit" value="Valider">
</form>

<form action="#" method="GET">
    <input type="hidden" name="reinit" value="yes">
    <input type="submit" value="Réinitialiser">
</form>

<?php
    echo $chiffreAlea;

    if(isset($_GET['reinit']) && $_GET['reinit'] === "yes"){
        $chiffreAlea = 7;
    }

        echo $chiffreAlea;

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
    include("../common/footer.php");
?>

