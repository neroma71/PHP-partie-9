<?php
    $mois = $_GET['mois'];
    $annee = $_GET['annee'];
    include('functions.php');
?>
<h1 style="text-align:center;"><?php echo afficher_mois_en_lettre($mois)." ".$annee ?></h1>
<div>
    <?php calendrier($mois, $annee);?>
</div>