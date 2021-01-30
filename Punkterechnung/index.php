<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

 if(isset($_POST['send']))
    {
        $min_Geschwindigkeit = $_POST['number1'];
        $max_Geschwindigkeit = $_POST['number2'];
        
    }

    if ($_POST['ort'] == "in") {
    $Ort = "in der Stadt";
    }

    if ($_POST['ort'] == "aus"){ 
    $Ort = "aus der Stadt";
    }

    
        
    
	$strafe= $min_Geschwindigkeit - $max_Geschwindigkeit;
    
    echo $strafe." </br></br>";    

    switch($strafe){

                
        case 10<=$strafe && $strafe<=30:
            $strafe= 40;
            echo"Sie Müssen ein strafe von ".$strafe." € bezahlen </br>";
            break;

               
   	case 31<=$strafe && $strafe<=60:
            $strafe= 60;
            echo"Sie Müssen ein strafe von ".$strafe." € bezahlen </br>";
            break;
        
        case 61<=$strafe && $strafe<=80:
            $strafe=120;
            echo"Sie Müssen ein strafe von ".$strafe." € bezahlen </br>";
            break;

        
        case 81<=$strafe && $strafe <=100:
            $strafe= 90;
            echo"Sie Müssen ein strafe von ".$strafe." € bezahlen </br>";
            break;

	case $strafe > 101:
            $strafe= 130;
            echo"Sie Müssen ein strafe von ".$strafe." € bezahlen </br>";
            break;

    }

?>

</body>
</html>