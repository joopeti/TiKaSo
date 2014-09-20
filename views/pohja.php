<!DOCTYPE html>
<html>
    <head>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <title>Ystävänvälityspalvelu</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class ="tausta">
        <div class="container" id="sisalto"> 
            <ul class="nav nav-pills" id="navigaatio">
                <li class="navbar-header">
                    <a class="navbar-brand" href="etusivu.html">Ystävänvälityspalvelu</a></li>
                <li><a href="etsi.html">Etsi</a></li>
                <li><a href="selaus.html">Selaa</a></li>
                <li><a href="viestit.html">Viestit</a></li>
                <li><a href="profiili.html">Oma profiili</a></li>
                <li class="active navbar-right"><a href="kirjautuminen.html">Kirjautuminen</a></li> 
                <li class="navbar-right"><a href="rekisterointi.html">Rekisteröityminen</a></li> 
            </ul>
            <?php if (!empty($data->virheViesti)): ?>
                <div class="alert alert-danger"><?php echo $data->virheViesti; ?></div>
            <?php endif; ?>
            <?php if (!empty($data->onnistumisViesti)): ?>
                <div class="alert alert-success"><?php echo $data->onnistumisViesti; ?></div>
            <?php endif; ?>
            <div class="sisalto">
                <?php require 'views/' . $sivu;
                ?>
            </div>
            <footer class="lopuke">
                ©joopeti, PariTELE Oy 2014
            </footer>
        </div>


    </body>
</html>
