<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" ><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riscaldamento</title>
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
    <h3>Gli impianti dell'immobile: riscaldamento</h3><br>
    Seleziona e compila i sequenti sottosistemi se presenti<br><br>
    <form action="ape.php" method="post">
        <input type="hidden" name="step" value="4">
    <div class="row">
        <div class="checkbox">
            <label for="emissione">
                <input type="checkbox" id="emissione" data-toggle="collapse" data-target="#demo1" name="emissione" value="1"> Sottosistema di emissione</label>
            <div id="demo1" class="collapse">
                <div class="row" style="margin-top: 20px">Seleziona il tuo radiatore e la sua potenza
                    <div class="checkbox">
                        <label for="radiatore1">
                        <input type="checkbox" id="radiatore1">Radiatore 1</label>
                        <label>Potenza<input type="text" id="potenza1"></label>
                    </div>
                </div>
                <div class="row">
                    <div class="checkbox">
                    <label for="radiatore2">
                        <input type="checkbox" id="radiatore2">Radiatore 2</label>
                    <label>Potenza<input type="text" id="potenza2"></label>
                    </div>
                </div>
                <div class="row">
                    <div class="checkbox">
                    <label for="radiatore3">
                        <input type="checkbox" id="radiatore3">Radiatore 2</label>
                    <label>Potenza<input type="text" id="potenza3"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="checkbox">
            <label for="controllo">
                <input type="checkbox" id="controllo" data-toggle="collapse" data-target="#demo2"> Sottosistema di controllo e regolazione</label>
            <div id="demo2" class="collapse">
                <div class="row" style="margin-top: 20px">Seleziona il tuo termostato
                    <div class="checkbox">
                        <label for="termostato1">
                            <input type="checkbox" id="termostato1">Termostato di zona 1</label>
                    </div>
                </div>
                <div class="row">
                    <div class="checkbox">
                        <label for="termostato2">
                            <input type="checkbox" id="termostato2">Termostato di zona 2</label>

                    </div>
                </div>
                <div class="row">
                    <div class="checkbox">
                        <label for="termostato3">
                            <input type="checkbox" id="termostato3">Termostato di zona 3</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="checkbox">
            <label for="distribuzione">
                <input type="checkbox" id="distribuzione" data-toggle="collapse" data-target="#demo3"> Sottosistema di distribuzione</label>
            <div id="demo3" class="collapse">
                <div class="row" style="margin-top: 20px">Seleziona il tuo impianto di distribuzione
                    <div class="checkbox">
                        <label for="distribuzione1">
                            <input type="checkbox" id="distribuzione1">Impianto centralizzato</label>
                    </div>
                </div>
                <div class="row">
                    <div class="checkbox">
                        <label for="distribuzione2">
                            <input type="checkbox" id="distribuzione2">Distribuzione verticale</label>

                    </div>
                </div>
                <div class="row">
                    <div class="checkbox">
                        <label for="distribuzione3">
                            <input type="checkbox" id="distribuzione3">Distribuzione orizzontale</label>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="checkbox">
            <label for="accumulo">
                <input type="checkbox" id="accumulo"> Sottosistema di accumulo</label>
        </div>
    </div>
    <div class="row">
        <div class="checkbox">
            <label for="generazione">
                <input type="checkbox" id="generazione" data-toggle="collapse" data-target="#demo4"> Sottosistema di generazione</label>
            <div id="demo4" class="collapse">
                <div class="row" style="margin-top: 20px">Seleziona il tuo generatore
                    <div class="checkbox">
                        <label for="generatore1">
                            <input type="checkbox" id="generatore1">Generatori monostadio</label>
                    </div>
                </div>
                <div class="row">
                    <div class="checkbox">
                        <label for="generatore2">
                            <input type="checkbox" id="generatore2">Generatori modulati</label>

                    </div>
                </div>
                <div class="row">
                    <div class="checkbox">
                        <label for="generatore3">
                            <input type="checkbox" id="generatore3">Generatori a condensazione</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 20px">
        <div class="col-sm-6">
        <label for="termica" >Seleziona la centrale termica presente nel tuo ambiente</label>
            <select class="form-control" id="termica">
                <option selected>Seleziona</option>
                <option>opzione 1</option>
                <option>opzione 2</option>
                <option>opzione 3</option>
                <option>opzione 4</option>
                <option>opzione 5</option>
            </select>
        </div>
        <div class="col-sm-6"></div>
    </div>

    <div class="panel-footer">
        <a href="3_caratteristiche.html"> <button class="btn btn-default">Torna indietro</button></a>
        <button type="submit" class="btn btn-primary pull-right btn-avanti">Avanti</button>
    </div>
    </form>
</div>
<div class="footer">
    <div class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">
            <a href="#">APE certificazione energetica</a> |
            <a href="#"> Copyright</a> |
            <a href="#">Privacy e policy</a>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
