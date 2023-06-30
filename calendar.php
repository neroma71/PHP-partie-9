<?php
    $mois = date('m');
    $annee = date('y');
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <div>
        <img id="prev" src="prev.png">
        <img id="next" src="next.png">
    </div>
    <div id="content">
    
    </div>
   <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        jQuery(function($){
            
        var mois = <?php echo $mois; ?>;
        var annee = <?php echo $annee; ?>;
            $(document).ready(function(){
                $("#content").load("calendrier.php?mois="+mois+"&annee="+annee+"");
            });
            $("#prev").click(function(){
                mois--;
                if(mois < 1){
                    annee--;
                    mois = 12;
                }
                $("#content").load("calendrier.php?mois="+mois+"&annee="+annee+"");
            });
             $("#next").click(function(){
                mois++;
                if(mois > 12 ){
                    annee++;
                    mois = 1;
                }
                $("#content").load("calendrier.php?mois="+mois+"&annee="+annee+"");
            });
        });
    </script>
</body>
</html>
