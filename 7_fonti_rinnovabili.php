<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" ><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonti rinnovabili</title>
    <!-- Fogli di stile -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/style.default.css" rel="stylesheet">
    <link href="css/style.custom.css" rel="stylesheet">
    <script src="js/respond.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/custom_ape.js"></script>
</head>
<body>
    <div class="page-header">
        <div class="row">
            <div class="col-sm-3 ">
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
        <h3>Gli impianti dell'immobile: fonti rinnovabili</h3><br>
        Seleziona e compila i sequenti sottosistemi se presenti<br><br>
        <form action="ape.php" method="post">
            <input type="hidden" name="step" value="7">
        <div class="row">
            <div class="checkbox">
                <label for="solare-termico">
                    <input type="checkbox" id="solare-termico" name="solare-termico" data-toggle="collapse" data-target="#prova1">
                    Solare termico
                </label>
                <div id="prova1" class="collapse">
                    <div class="row" style="margin-top: 20px">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="sel-solare">Seleziona il tipo di pannello</label>
                                <select class="form-control" id="sel-solare" name="sel-solare">
                                    <option selected>Seleziona</option>
                                    <option value="opzione1">opzione 1</option>
                                    <option value="opzione2">opzione 2</option>
                                    <option value="opzione2">opzione 3</option>
                                    <option value="opzione3">opzione 4</option>
                                    <option value="opzione4">opzione 5</option>
                                </select>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="checkbox">
                <label for="fotovoltaico">
                    <input type="checkbox" id="fotovoltaico" name="fotovoltaico" data-toggle="collapse" data-target="#prova2">
                    Fotovoltaico
                </label>
                <div id="prova2" class="collapse">
                    <div class="row" style="margin-top: 20px">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="sel-fotovoltaico">Seleziona</label>
                                <select class="form-control" id="sel-fotovoltaico" name="sel-fotovoltaico">
                                    <option selected>Seleziona</option>
                                    <option value="opzione1">opzione 1</option>
                                    <option value="opzione2">opzione 2</option>
                                    <option value="opzione2">opzione 3</option>
                                    <option value="opzione3">opzione 4</option>
                                    <option value="opzione4">opzione 5</option>
                                </select>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="checkbox">
                <label for="biomasse">
                    <input type="checkbox" id="biomasse" name="biomasse" data-toggle="collapse" data-target="#prova3">
                    Biomasse
                </label>
                <div id="prova3" class="collapse">
                    <div class="row" style="margin-top: 20px">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="sel-biomasse">Tipo di biomasse</label>
                                <select class="form-control" id="sel-biomasse" name="sel-biomasse">
                                    <option selected>Seleziona</option>
                                    <option value="opzione1">opzione 1</option>
                                    <option value="opzione2">opzione 2</option>
                                    <option value="opzione2">opzione 3</option>
                                    <option value="opzione3">opzione 4</option>
                                    <option value="opzione4">opzione 5</option>
                                </select>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="checkbox">
                <label for="geotermico">
                    <input type="checkbox" id="geotermico" name="geotermico" data-toggle="collapse" data-target="#prova4">
                    Geotermico
                </label>
                <div id="prova4" class="collapse">
                    <div class="row" style="margin-top: 20px">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="sel-geotermico">Sistema di captazione del calore</label>
                                <select class="form-control" id="sel-geotermico" name="sel-geotermico">
                                    <option selected></option>
                                    <option value="opzione1">opzione 1</option>
                                    <option value="opzione2">opzione 2</option>
                                    <option value="opzione2">opzione 3</option>
                                    <option value="opzione3">opzione 4</option>
                                    <option value="opzione4">opzione 5</option>
                                </select>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="checkbox">
                <label for="eolico">
                    <input type="checkbox" id="eolico" name="eolico" data-toggle="collapse" data-target="#prova5">
                    Eolico
                </label>
                <div id="prova5" class="collapse">
                    <div class="row" style="margin-top: 20px">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="sel-eolico">Seleziona il tipo di impianto</label>
                                <select class="form-control" id="sel-eolico" name="sel-eolico">
                                    <option selected></option>
                                    <option value="opzione1">opzione 1</option>
                                    <option value="opzione2">opzione 2</option>
                                    <option value="opzione2">opzione 3</option>
                                    <option value="opzione3">opzione 4</option>
                                    <option value="opzione4">opzione 5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <a href="6_acqua_calda_sanitaria.html"> <button class="btn btn-default">Torna indietro</button></a>
            <a href="compra.html"> <button type="submit" class="btn btn-primary pull-right btn-avanti">Avanti</button></a>
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
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
