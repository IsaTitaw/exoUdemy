<?php
include("../common/header.php");
include("../common/menu.php");
?>

    <h1>Pyramide</h1>
    <form action="#" method="post"</form>
    <!--    //#= reloader la même page-->
    <label for="hauteur">Hauteur de la pyramide</label>
    <input type="number" name="hauteur" id="hauteur">
    <input type="submit" value="envoyez">;

<?php
    if(isset($_POST['hauteur']) && $_POST['hauteur'] >0 ) {
        $hauteur = $_POST['hauteur'];
        echo "<h2> La hauteur est: " . $hauteur . "</h2>";
        $txt = "";
        for ($i = 0; $i < $hauteur; $i++) {
            $txt .= "xx";
            echo $txt . "<br />";
        }
        for ($i = 0; $i < $hauteur; $i++) {
            $txt = substr($txt, 0, strlen($txt)-2);
            echo $txt . "<br />";
        }

    }
?>

<?php
include("../common/footer.php");
?>