<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" ><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettagli generali immobile</title>
    <!-- Fogli di stile -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/style.default.css" rel="stylesheet">
    <link href="css/style.custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>
    <![endif]-->
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
    <h3>Dettagli generali immobile</h3>
    <form action="ape.php" method="post">
        <input type="hidden" name="step" value="2">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="tipo-certificazione">Tipologia certificazione</label>
                    <select class="form-control" id="tipo-certificazione" name="tipo-certificazione">
                        <option selected>Seleziona il tipo di certificazione</option>
                        <option value="new-certification">Nuova certificazione</option>
                        <option value="upgrading">Riqualifica energetica</option>
                        <option value="passage">Passaggio di proprietà</option>
                        <option value="rent">Affitto</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 20px">

            <div class="col-sm-4">
                <label for="comune-immobile">Comune</label>
                <input class="form-control" type="text" id="comune-immobile" name="comune-immobile" placeholder="">
            </div>
            <div class="col-sm-4">
                <label for="prov-immobile">Provincia</label>
                <input class="form-control" type="text" id="prov-immobile" name="prov-immobile" placeholder="">
            </div>
            <div class="col-sm-4">
                <label for="cap-immobile">CAP</label>
                <input class="form-control" type="text" id="cap-immobile" name="cap-immobile" placeholder="">
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-sm-4">
                <label for="anno-immobile">Anno costruzione</label>
                <input id="anno-immobile" class="form-control" type="text" name="anno-immobile" placeholder="gg/mm/aaaa">
            </div>
            <div class="col-sm-4" >
                <div class="form-group">
                    <label for="tipo-edilizia">Tipologia edilizia</label>
                    <select class="form-control" id="tipo-edilizia" name="tipo-edilizia">
                        <option selected>Seleziona il tipo di edificio</option>
                        <option value="appartamento">Appartamento</option>
                        <option value="residence">Residence</option>
                        <option value="villa">Villa</option>
                        <option value="casa">Casa</option>
                    </select>
                </div>

            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="tipo-edificio">Ed. pubblico o privato</label>
                    <select class="form-control" id="tipo-edificio" name="tipo-edificio">
                        <option selected>Seleziona il tipo di edificio</option>
                        <option value="Ed pubblico ad uso privato">Ed. pubblico ad uso privato</option>
                        <option value="Ed privato ad uso pubblico">Ed. privato ad uso pubblico</option>
                        <option value="Ed pubblico ad uso pubblico">Ed. pubblico ad uso pubblico</option>
                        <option value="Ed privato ad uso privato">Ed. privato ad uso privato</option>
                    </select>

                </div>

            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">

                <div class="form-group">
                    <label for="tipo-costruzione">Tipologia costruttiva</label>
                    <select class="form-control" id="tipo-costruzione" name="tipo-costruzione">
                        <option selected>Seleziona il tipo di edificio</option>
                        <option value="1">opzione 1</option>
                        <option value="2">opzione 2</option>
                        <option value="3">opzione 3</option>
                        <option value="4">opzione 4</option>
                        <option value="5">opzione 5</option>
                    </select>

                </div>

            </div>
            <div class="col-sm-4">

                <div class="form-group">
                    <label for="destinazione">Destinazione d'uso</label>
                    <select class="form-control" id="destinazione" name="destinazione">
                        <option selected>Seleziona il tipo di edificio</option>
                        <option value="Abitazione">Abitazione</option>
                        <option value="Studio privato">Studio privato</option>
                        <option value="Ufficio">Ufficio</option>
                        <option value="Ristorazione">Ristorazione</option>
                        <option value="Sportivo">Sportivo</option>
                    </select>
                </div>

            </div>

        </div>

    <div class="panel-footer">
        <a href="1_dati_per_la_costruzione.php"> <button class="btn btn-default">Torna indietro</button></a>
        <a href="3_caratteristiche.html"> <button type="submit" class="btn btn-primary pull-right btn-avanti">Avanti</button></a>
    </div>
    </form>
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
<!-- jQuery e plugin JavaScript  -->

<script src="js/bootstrap.min.js"></script>
</body>
</html>