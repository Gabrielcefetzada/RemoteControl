
<html>
    <head>
        <title>Remote System</title>
    </head>
    <body>
        <?php
        
        // Built by Gabriel Augusto
        
        include_once 'Remote.php';
        include_once 'AirConditioningRemote.php';
        include_once 'TVRemote.php';
        include_once 'IluminationRemote.php';
        
        $Ar = new AirConditioningRemote(false, 3, 4, false, false, false, false);
        $Ar->GovernnamentAprovation();
        $Ar->TurnOn();
        $Ar->DownWindVelocity();
        $Ar->UpWindVelocity();
        $Ar->UpWindVelocity();
        $Ar->UpWindVelocity();
        $Ar->UpWindVelocity();
        $Ar->UpWindVelocity();
        $Ar->UpWindVelocity();
        
         ?>
    </body>
</html>



