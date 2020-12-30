
<html>
    <head>
        <title>Remote System</title>
    </head>
    <body>
        <?php
        
        // By Gabriel
        
        include_once 'ControleRemoto.php';
        include_once 'ControleArCondicionado.php';
        include_once 'ControleTV.php';
        include_once 'ControleIluminacao.php';
        
        $Ar = new ControleArCondicionado(false, 3, 4, false, false, false, false);
        $Ar->GovernnamentAprovation();
        $Ar->TurnOn();
        
         ?>
    </body>
</html>



