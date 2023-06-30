<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <?php
     date_default_timezone_set('Europe/Paris');
     $date = date('d-m-Y h:i:s');
     echo $date;
        echo "<br />";
     $date2 = date('d-m-y h:i:s');
     echo $date2;
     echo "<br />";

     setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
     echo (strftime("%A %d %B"));

     echo "<br />";
     echo 'le time stamp du jour =' .time();

     echo "<br />";

    $date20 = date('d-m-Y', strtotime('+20 days'));
    echo $date20;

    echo '<br />';

    $dateMoins22 = date('d-m-Y', strtotime('-22 days'));
    echo $dateMoins22;
    ?>

<form action="" method="get">
    <label for="mois">mois de l'année :</label>
        <select id="mois" name="mois">
        <?php 
            $monMoi=[1=>"janvier", 2=>"fevrier", 3=>"mars", 4=>"avril", 5=>"mai", 6=>"juin", 7=>"juillet", 8=>"aout", 9=>"septembre", 10=>"octobre", 11=>"novembre", 12=>"decembre"];
            foreach($monMoi as $mm => $value){
                echo '<option value="'.$mm.'">'.$value.'</option>'; 
            }
            ?>
        </select>
        <label for="annees">années :</label>
        <select id="annee" name="annee">
            <?php 
             $annee = date('Y'); 
             $lastan = $annee + 100;
             for($i = $annee; $i<$lastan; $i++)
             {
                echo '<option value="'.$i.'">'.$i.'</option>'; 
             }
            ?>
           
        </select>
            <input type="submit" value="envoyer">
        </form>
        <?php
             if(isset($_GET['mois']) && isset($_GET['annee'])){
                $month = $_GET['mois'];
                $year = $_GET['annee'];
                $jour = cal_days_in_month(CAL_GREGORIAN, intval($month), intval($year));
                echo $month." ".$year." ".$jour;
                echo "<br />";
                 echo "<table>";
    echo "<th>lundi</th><th>mardi</th><th>mercredi</th><th>jeudi</th><th>vendredi</th><th>samedi</th><th>dimanche</th>";
                echo "<tr>";  
                for($k = 1; $k <= 7; $k++){
                       echo "<td>".$k."</td>";
                    }
                    echo "</tr>";
                    echo "<tr>";  
                    for($q = 1; $k >= 7 && $k <= 14; $k++){
                           echo "<td>".$k."</td>";
                        }
                        echo "</tr>";
                    
                    echo "</table>";
              }
            
        ?>
</body>
</html>