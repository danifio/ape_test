<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" ><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acqua calda sanitaria</title>
    <!-- Fogli di stile -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/style.default.css" rel="stylesheet">
    <link href="css/style.custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

</head>
<body>
<div class="page-header">
    <div class="row">
        <div class="col-sm-3">
            <h1>APE certificazione energetica</h1>
        </div>
        <div class="col-sm-6 bottom-menu">
            <a class="btn btn-primary" href="index.html">Home</a>
            <a class="btn btn-primary" href="funzionalita.html">Funzionalità</a>
            <a class="btn btn-primary" href="supporto.html">Supporto</a>
            <a class="btn btn-primary" href="faq.html">F.A.Q.</a>
        </div>
        <div class="col-sm-3">
            <a class="btn btn-primary-alt" href="uscita.html">Esci</a>
        </div>
    </div>
</div>
<div class="container">
    <h3>Gli impianti dell'immobile: acqua calda sanitaria</h3><br>
    Seleziona e compila i sequenti sottosistemi se presenti<br><br>
    <form action="ape.php" method="post">
        <input type="hidden" name="step" value="6">
    <div id="accordion" class="panel-group">
    <div class="row">
        <div class="checkbox">
            <label for="generatore1acs">
                <input type="checkbox" id="generatore1acs">Generatore a gas di tipo istantaneo per la sola produzione di ACS
            </label>

        </div>
    </div>
    <div class="row">
        <div class="checkbox">
            <label for="generatore2acs">
                <input type="checkbox" id="generatore2acs">
                Generatore a gas ad accumulo
            </label>

        </div>
    </div>
    <div class="row">
        <div class="checkbox">
            <label for="generatore3acs">
                <input type="checkbox" id="generatore3acs">
                Bollitore elettrico ad accumulo e a fuoco diretto
            </label>

        </div>
    </div>
    <div class="row" style="margin-top: 20px">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="attivita">Seleziona il tipo di attività a cui è destinato l'immobile</label>
                <select class="form-control" id="attivita">
                    <option selected>Seleziona l'attività</option>
                    <option>opzione 1</option>
                    <option>opzione 2</option>
                    <option>opzione 3</option>
                    <option>opzione 4</option>
                    <option>opzione 5</option>
                </select>

            </div>
        </div>
    </div>
    </div>

    <div class="panel-footer">
        <a href="5_raffrescamento.html"> <button class="btn btn-default">Torna indietro</button></a>
        <a href="7_fonti_rinnovabili.html"> <button class="btn btn-primary pull-right btn-avanti">Avanti</button></a>
    </div>

</div>
<div class="footer">
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <a href="#">APE certificazione energetica</a> |
        <a href="#"> Copyright</a> |
        <a href="#">Privacy e policy</a>
    </div>
    <div class="col-sm-4"></div>
</div>
</div>

<script src="js/bootstrap.min.js"></script>

</body>
</html>
