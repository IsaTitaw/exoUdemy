<?php
include("../common/header.php");
include("../common/menu.php");
?>

<h1>Pyramide</h1>

<form action="#" method="post"</form>
    <!--    //#= reloader la même page-->
    <label for="rayon">Rayon: </label>
    <input type="number" name="rayon" id="rayon"><br/>

    <label for="perimetre">Périmètre: </label>
    <input type="checkbox" name="perimetre" id="perimetre" checked><br/>

    <label for="aire">Aire: </label>
    <input type="checkbox" name="aire" id="aire" checked><br/>
    <input type="submit" value="envoyez">
</form>


<?php
    if(isset($_POST['rayon']) && $_POST['rayon'] >0 ) {
        $rayon = $_POST["rayon"];
            echo "<h2> Résultats: </h2>";
        if(isset($_POST['perimetre'])){
            echo "Le périmètre: " .($rayon* 2* pi()) ;
        }
        echo "</p>";
        if(isset($_POST['aire'])){
            echo "L'aire: " .($rayon* $rayon* pi());


        }
    }
?>

<?php
include("../common/footer.php");
?>








<?php
include("../common/footer.php");
?>