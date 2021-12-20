<?php 
    $ishere = false;
    $fr = "";
    $db = new PDO('mysql:host=localhost;dbname=info;charset=utf8','root','');

$etud = $db->prepare('SELECT * FROM info');
$etud->execute();
$etuds = $etud->fetchAll();


if ( empty( !($_GET['matricule']) ) ) {
    foreach ($etuds as $etude) {
        if (  strcmp($_GET['matricule'], $etude['mat_l1'])   == 0) {
            $ishere = true;
        }
    }
      }


      if (isset($_GET['matricule'])) {

   $db = new PDO('mysql:host=localhost;dbname=info;charset=utf8','root','');
        
    $sta2 = $db->prepare("SELECT * FROM info WHERE mat_l1=?");
    $sta2->execute([$_GET['matricule']]);
    $votes2 = $sta2->fetch();
    
    if ($votes2 != null ) {
    $avote = $votes2['a_vote'];
    }
      }


if ( empty(!( $_GET['matricule'] ))) {

    if($ishere == false){
        $fr = '<p style=" color:red ; font-size:20px" >intrus</p>' ;
    } else
     {
         if ($avote) {
           $fr = '<p style=" color:red ; font-size:30px  ">Vous avez deja votez</p>';
         } else {
            $fr = '<p style=" color:green ; font-size:40px ; text-align:center ; margin: 10px">bienvenue</p>';
         
     } }
}


    
?>
 <?php  include 'index.php' ;  ?>

