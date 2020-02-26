<?php

class PersonnageObjet{
    public $nom ="Luke";
    public $img = "player.png";
    public $age = 27;
    public $sexe = true;
    public $force = 5;
    public $agilite = 4;

    public function affichePerso(){
        echo "Nom: ". $this->nom."<br/>";
        echo "Age: ". $this->age."<br/>";
        if($this->sexe){
            echo "Homme <br/>";
            echo "Sexe <br/>";
        }else{
            echo "Femme <br/>";
        }
        echo "Force: ". $this->force."<br/>";
        echo "Agilité: ". $this->agilite."<br/>";
    }

    public function afficherTemplate(){
        echo "<div class='gauche'>";
        echo "<img src = '../sources/images/".$this->img."' alt = '".$this->img."' />";
        echo "</div>";
        echo "<div class='gauche'>";
        $this ->affichePerso();
        echo "</div>";
        echo "<div class='clearB'></div>";
    }
}


include("../common/header.php");
include("../common/menu.php");

?>

    <h2>Personnages</h2>

<?php
$p1 = new PersonnageObjet();
$p1 ->afficherTemplate();
$p2 = new PersonnageObjet();
$p2 -> nom = "Isa";
$p2 -> age = 40;
$p2 -> sexe = false;
$p2 -> force = 1000;
$p2 -> agilite = 1000;
$p2 -> img = "playerF.png";
$p2 ->afficherTemplate();
?>


<?php
//$p1 = new PersonnageObjet();
//echo "Nom: ".$p1 ->nom."<br/>";
//echo "Age: ".$p1 ->age."<br/>";
//
//$p2 = new PersonnageObjet();
//$p2->nom="Isa";
//echo "Nom: ".$p2->nom."<br/>";
//
//$p3 = new PersonnageObjet();
//$p3->nom="Nico";
//echo "Nom: ".$p3->nom."<br/>";

?>
























<?php
include("../common/footer.php");
?>