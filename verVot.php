<?php 

$db = new PDO('mysql:host=localhost;dbname=info;charset=utf8','root','');

if ( !(isset($_POST['nom'])) ) {
   die();
}

$nom = $_POST['nom'];
$mat = $_GET['matricule'];

$sta1 = $db->prepare("SELECT * FROM presi");
$sta2 = $db->prepare("SELECT * FROM info");

$sta1->execute();
$sta2->execute();


$votes1 = $sta1->fetch(PDO::FETCH_OBJ);
$votes2 = $sta2->fetch(PDO::FETCH_OBJ);

$vote =  $votes1->nbr_vote;
$avote = $votes2->a_vote;

$avote = true;

$vote = $vote + 1;

$sta1 = $db->prepare("
                  UPDATE presi
                  SET nbr_vote=?
                  WHERE nom_prenom=?
                ");
$sta1->execute([$vote , $nom]);


$sta2 = $db->prepare("
                UPDATE info
                SET a_vote=?
                WHERE mat_l1=?
              ");
$sta2->execute([$avote , $mat]);


?>

<?php  include 'index.php' ;  ?>