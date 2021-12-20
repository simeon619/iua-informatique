<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


<?php 
    $db = new PDO('mysql:host=localhost;dbname=info;charset=utf8', 'root', '');
    $Statement = $db->prepare('SELECT * FROM presi');

    $Statement->execute();
    $presis = $Statement->fetchAll();
?>
    <table border=1>
    
    
    
    <tr>
    <td>NOM ET PRENOM</td> <td> NIVEAU</td>  <td> POINTS</td>
    </tr>

    <?php foreach($presis as $presi): ?>
    <tr>
    <td><?=$presi['nom_prenom']?></td> <td><?=$presi['nivo']?></td>  <td><?=$presi['nbr_vote']?></td>
    </tr>
    
    <?php endforeach ?>
    
    </table>
    



    <form action="reiniVote.php" method="post">

    <button type="submit">reinitialiser les votes</button>
    </form>



    


</body>
</html>