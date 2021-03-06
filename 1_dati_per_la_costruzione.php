
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" ><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dati per la costruzione</title>
    <!-- Fogli di stile -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/style.default.css" rel="stylesheet">
    <link href="css/style.custom.css" rel="stylesheet">
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/custom_ape.js"></script>
    <!--[if lt IE 9]>
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
    <h3>Dati per la costruzione</h3>
    <form action="ape.php" method="post">
        <input type="hidden" name="step" value="1">
    <div class="row">
        <div class="checkbox dettagli-costruzione">
            <label for="dati-architetto">
                <input type="checkbox" id="dati-architetto" name="dati-architetto" >
                Progettista architettonico<br><br>
            </label>
            <div id="dettagli-architetto" style="display: none">
                <div class="row" >
                    <div class="col-sm-3">
                        <label class="control-label" for="nome-architetto">Nome</label>
                        <input class="form-control" type="text" id="nome-architetto" name="nome-architetto">
                    </div>
                    <div class="col-sm-3">
                        <label class="control-label" for="cognome-architetto">Cognome</label>
                        <input class="form-control" type="text" id="cognome-architetto" name="cognome-architetto">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label class="control-label" for="comune-architetto">Comune di residenza</label>
                        <input class="form-control" type="text" id="comune-architetto" placeholder="">
                    </div>
                    <div class="col-sm-3">
                        <label class="control-label" for="provincia-architetto">Provincia di residenza</label>
                        <input class="form-control" type="text" id="provincia-architetto" placeholder="">
                    </div>
                    <div class="col-sm-3">
                        <label class="control-label" for="cap-architetto">CAP</label>
                        <input class="form-control" type="text" id="cap-architetto" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="tel-architetto">Tel</label>
                        <input class="form-control" id="tel-architetto" type="text" placeholder="">
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label" for="email-architetto">Inserisci l'indirizzo e-mail</label>
                            <input type="email" name="email-architetto" id="email-architetto" class="form-control" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="checkbox dettagli-costruzione">
            <label for="dati-impiantista">
                <input type="checkbox" id="dati-impiantista" name="dati-impiantista">Progettista impianti<br><br>
            </label>
            <div id="dettagli-impiantista" style="display: none">
                <div class="row">
                    <div class="col-sm-3">
                        <label class="control-label" for="nome-impiantista">Nome</label>
                        <input class="form-control" type="text" id="nome-impiantista" name="nome-impiantista">
                    </div>
                    <div class="col-sm-3">
                        <label class="control-label" for="cognome-impiantista">Cognome</label>
                        <input class="form-control" type="text" id="cognome-impiantista" name="cognome-impiantista">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label class="control-label" for="comune-impiantista">Comune di residenza</label>
                        <input class="form-control" type="text" id="comune-impiantista" placeholder="">
                    </div>
                    <div class="col-sm-3">
                        <label class="control-label" for="prov-impiantista">Provincia di residenza</label>
                        <input class="form-control" type="text" id="prov-impiantista" placeholder="">
                    </div>
                    <div class="col-sm-3">
                        <label class="control-label" for="cap-impiantista">CAP</label>
                        <input class="form-control" type="text" id="cap-impiantista" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="tel-impiantista">Tel</label>
                        <input  class="form-control" type="text" id="tel-impiantista" placeholder="">
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label" for="email-impiantista">Inserisci l'indirizzo e-mail</label>
                            <input type="email" id="email-impiantista" name="email-impiantista" class="form-control" />
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="row">
        <div class="checkbox dettagli-costruzione">
            <label for="dati-costruttori">
                <input type="checkbox" id="dati-costruttori" name="dati-costruttori">Costruttori<br><br>
            </label>
            <div id="dettagli-costruttori" class="collapse" style="display: none">

                <div class="row">
                    <div class="col-sm-3">
                        <label class="control-label" for="nome-costrutt">Nome</label>
                        <input class="form-control" type="text" id="nome-costrutt" name="nome-costrutt">
                    </div>
                    <div class="col-sm-3">
                        <label class="control-label" for="cognome-costrutt">Cognome</label>
                        <input class="form-control" type="text" id="cognome-costrutt" name="cognome-costrutt">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label class="control-label" for="comune-costrutt">Comune di residenza</label>
                        <input class="form-control" type="text" id="comune-costrutt" placeholder="">
                    </div>
                    <div class="col-sm-3">
                        <label class="control-label" for="prov-costrutt">Provincia di residenza</label>
                        <input class="form-control" type="text" id="prov-costrutt" placeholder="">
                    </div>
                    <div class="col-sm-3">
                        <label class="control-label" for="cap-costrutt">CAP</label>
                        <input class="form-control" type="text" id="cap-costrutt" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="tel-costrutt">Tel</label>
                        <input  class="form-control" type="text" id="tel-costrutt" placeholder="">
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group" >
                            <label class="control-label" for="email-costrutt">Inserisci l'indirizzo e-mail</label>
                            <input type="email" id="email-costrutt" name="email-costrutt" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="checkbox dettagli-costruzione">
            <label for="dati-direttore">
                <input type="checkbox" id="dati-direttore" name="dati-direttore">Direttore lavori<br><br>
            </label>
            <div id="dettagli-direttore" style="display: none">

                <div class="row">
                    <div class="col-sm-3">
                        <label class="control-label" for="nome-direttore">Nome</label>
                        <input class="form-control" type="text" id="nome-direttore" name="nome-direttore">
                    </div>
                    <div class="col-sm-3">
                        <label class="control-label" for="cognome-direttore">Cognome</label>
                        <input class="form-control" type="text" id="cognome-direttore" name="cognome-direttore">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label class="control-label" for="comune-direttore">Comune di residenza</label>
                        <input class="form-control" type="text" id="comune-direttore" placeholder="">
                    </div>
                    <div class="col-sm-3">
                        <label class="control-label" for="prov-direttore">Provincia di residenza</label>
                        <input class="form-control" type="text" id="prov-direttore" placeholder="">
                    </div>
                    <div class="col-sm-3">
                        <label class="control-label" for="cap-direttore">CAP</label>
                        <input  class="form-control" type="text" id="cap-direttore" placeholder="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="tel-direttore">Tel</label>
                        <input  class="form-control" type="text" id="tel-direttore" placeholder="">
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label" for="email-direttore">Inserisci l'indirizzo e-mail</label>
                            <input type="email"  id="email-direttore" name="email-direttore" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="checkbox dettagli-costruzione">
            <label for="dati-impresa">
                <input type="checkbox" id="dati-impresa" name="dati-impresa">Dati impresa<br><br>
            </label>
            <div id="dettagli-impresa" style="display: none">
                <div class="row">
                    <div class="col-sm-3">
                        <label class="control-label" for="nome-impresa">Nome impresa</label>
                        <input class="form-control" type="text" id="nome-impresa" name="nome-impresa">
                        <label for="tel-impresa">Tel</label>
                        <input  class="form-control" type="text" id="tel-impresa" placeholder="">
                    </div>
                    <div class="col-sm-3">
                        <label class="control-label" for="ragione-sociale">Ragione sociale</label>
                        <input class="form-control" type="text" id="ragione-sociale" name="ragione-sociale">
                        <label class="control-label" for="responsabile-impresa">Responsabile</label>
                        <input class="form-control" type="text" id="responsabile-impresa" name="responsabile-impresa">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <a href="primoaccesso.html"><button class="btn btn-default">Torna indietro</button></a>
        <a href="2_dettagli_generali_immobile.html"> <button type="submit" class="btn btn-primary pull-right btn-avanti">Avanti</button></a>
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
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>