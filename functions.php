<?php
    function calendrier($mois, $annee){
        $nombre_de_jour = cal_days_in_month(CAL_GREGORIAN, $mois, $annee);
        echo "<table>";
            echo"<tr>
            <th>Lundi</th>
            <th>Mardi</th>
            <th>Mercredi</th>
            <th>Jeudi</th>
            <th>Vendredi</th>
            <th>Samedi</th>
            <th>Dimache</th>
            </tr>";
        
            for($i = 1; $i <= $nombre_de_jour; $i++){
                
                $jour = cal_to_jd(CAL_GREGORIAN, $mois, $i, $annee);
                $jour_semaine = jddayofweek($jour);
                
                if($i == $nombre_de_jour){
                    if($jour_semaine == 1)
                    {
                        echo "<tr>";
                    }
                    echo "<td class='case'>".$i."</td></tr>";
                    
                }elseif($i == 1)
                    {
                  echo "<tr>";
                        if($jour_semaine == 0)
                    {
                        $jour_semaine = 7; 
                    }
                 for($k=1; $k != $jour_semaine; $k++)
                    {
                        echo "<td></td>";
                    }
                    echo "<td class='case'>".$i."</td>";
                    
                    if($jour_semaine == 7)
                    {
                        echo "</tr>";
                    }
                }else
                    {
                   if($jour_semaine == 1)
                   {
                       echo "<tr>";
                   } 
                    echo "<td class='case'>".$i."</td>";
                    if($jour_semaine == 0)
                    {
                        echo "</tr>";
                    }
                }
            }
        
        echo "</table>";
    }
function afficher_mois_en_lettre($d){
    $correspondre = $d-1;
    $table = ["Janvire", "Févreier", "Mars", "Avril", "Mais", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];
    
    return $table[$correspondre];
}
?>