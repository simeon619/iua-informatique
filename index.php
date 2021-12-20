<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOTE DU PRESIDENT</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $db = new PDO('mysql:host=localhost;dbname=info;charset=utf8', 'root', '');
    $Statement = $db->prepare('SELECT * FROM presi');

    $Statement->execute();
    $presis = $Statement->fetchAll();
    
    ?>
                     
<div class="main">
    <div class="mat">
        <form action="veri.php" method="get">
        <input type="text" name="matricule" id="" placeholder="entrez votre matricule">
        <?php   echo  (empty($fr))? "" :  $fr;   ?>
        </form> 
    </div>
    <div class="contain">
        <?php foreach($presis as $presi): ?>
           
        <div class="card">
        <form action="verVot.php?matricule=<?=$_GET['matricule']?>" method="post" >     
        <p> <?= $presi['nom_prenom'] ?>  <br> -------------- <br><?= $presi['nivo'] ?> 
        <input type="text" name="nom" value="<?= $presi['nom_prenom'] ?>" style="display:none"></p>
        <button type="submit">VOTES</button>
        </form>
    </div>
        <?php endforeach ?>
    </div>
</div>
</body>
<?php 

if (isset($_GET['matricule'])) {

    $db = new PDO('mysql:host=localhost;dbname=info;charset=utf8','root','');
    
$sta2 = $db->prepare("SELECT * FROM info WHERE mat_l1=?");
$sta2->execute([$_GET['matricule']]);
$votes2 = $sta2->fetch();

if ($votes2 != null ) {
$avote = $votes2['a_vote'];
}
if (isset($avote)) echo ($avote)? '<script src="scr1.js"></script>' : '<script src="scr.js"></script>' ; 

}


?>


</html>