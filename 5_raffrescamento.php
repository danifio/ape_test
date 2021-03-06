<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" ><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raffrescamento</title>
    <!-- Fogli di stile -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/style.default.css" rel="stylesheet">
    <link href="css/style.custom.css" rel="stylesheet">
    <script src="js/jquery-1.11.1.min.js"></script>
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
    <h3>Gli impianti dell'immobile: raffrescamento</h3><br>
    Seleziona e compila i sequenti sottosistemi se presenti<br><br>
    <form action="ape.php" method="post">
        <input type="hidden" name="step" value="5">
    <div class="row">
        <div class="checkbox">
            <label for="terminale-raff">
                <input type="checkbox" id="terminale-raff" name="terminale-raff" value="1" data-toggle="collapse" data-target="#prova1">
                Terminale di erogazione
            </label>
            <div id="prova1" class="collapse">
                <div class="row" style="margin-top: 20px">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="raffrescamento1">Seleziona</label>
                            <select class="form-control" id="raffrescamento1" name="raffrescamento1">
                                <option selected>Seleziona</option>
                                <option value="opzione1">opzione 1</option>
                                <option value="opzione2">opzione 2</option>
                                <option value="opzione3">opzione 3</option>
                                <option value="opzione4">opzione 4</option>
                                <option value="opzione5">opzione 5</option>
                            </select>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="checkbox">
            <label for="controllo-raff">
                <input type="checkbox" id="controllo-raff" name="controllo-raff" value="1" data-toggle="collapse" data-target="#prova2">
                Sottosistema di controllo
            </label>
            <div id="prova2" class="collapse">
                <div class="row" style="margin-top: 20px">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="raffrescamento2">Seleziona</label>
                            <select class="form-control" id="raffrescamento2" name="raffrescamento2">
                                <option selected>Seleziona</option>
                                <option value="regolazione centralizzata">Regolazione centralizzata</option>
                                <option value="opzione2">opzione 2</option>
                                <option value="opzione3">opzione 3</option>
                                <option value="opzione4">opzione 4</option>
                                <option value="opzione5">opzione 5</option>
                            </select>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
        <div class="row">
            <div class="checkbox">
                <label for="distribuzione-raff">
                    <input type="checkbox" id="distribuzione-raff" name="distribuzione-raff" value="1" data-toggle="collapse" data-target="#prova3">
                    Perdite di distribuzione
                </label>
                <div id="prova3" class="collapse">
                    <div class="row" style="margin-top: 20px">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="raffrescamento3">Seleziona</label>
                                <select class="form-control" id="raffrescamento3" name="raffrescamento3">
                                    <option selected>Seleziona</option>
                                    <option value="fluido termovettore ad aria">Fluido termovettore ad aria</option>
                                    <option value="fluido termovettore ad aria e acqua">Fluido termovettore ad aria e acqua</option>
                                    <option value="opzione2">opzione 2</option>
                                    <option value="opzione3">opzione 3</option>
                                    <option value="opzione4">opzione 4</option>
                                    <option value="opzione5">opzione 5</option>
                                </select>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="checkbox">
                <label for="perdite-raff">
                    <input type="checkbox" id="perdite-raff" name="perdite-raff" value="1" data-toggle="collapse" data-target="#prova4">
                    Perdite di accumulo
                </label>
                <div id="prova4" class="collapse">
                    <div class="row" style="margin-top: 20px">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="raffrescamento4">Seleziona</label>
                                <select class="form-control" id="raffrescamento4" name="raffrescamento4">
                                    <option selected>Seleziona</option>
                                    <option value="opzione1">opzione 1</option>
                                    <option value="opzione2">opzione 2</option>
                                    <option value="opzione3">opzione 3</option>
                                    <option value="opzione4">opzione 4</option>
                                    <option value="opzione5">opzione 5</option>
                                </select>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="panel-footer">
            <a href="4_riscaldamento.html"> <button class="btn btn-default">Torna indietro</button></a>
            <a href="6_acqua_calda_sanitaria.html"><button type="submit" class="btn btn-primary pull-right btn-avanti" >Avanti</button></a>
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
