
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" ><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caratteristiche dell'immobile e dettagli</title>
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
    <h3>Caratteristiche dell'immobile e dettagli</h3><br>
    <form action="ape.php" method="post">
        <input type="hidden" name="step" value="3">
    <div class="row">
        <div class="col-sm-3"><h4>La forma</h4></div>
        <div class="col-sm-4">
            <label for="superficie">Superficie disperdente m²</label>
            <input class="form-control" type="text" id="superficie" name="superficie">
        </div>
        <div class="col-sm-4">
            <label for="volume">Volume netto riscaldato m³</label>
            <input class="form-control" type="text" id="volume" name="volume">
        </div>
    </div>
    <div class="row" style="margin-top: 20px">
        <div class="col-sm-3"><h4>L'orientamento</h4></div>
        <div class="col-sm-6">
            <label for="numero_pareti_nord">Quante pareti sono esposte a nord?</label>
            <input class="form-control numero-caratteristiche" type="number" id="numero_pareti_nord" name="numero_pareti_nord">
            <!--<button id="show_pareti_n" style="margin-left: 90%">Ok</button>-->
            <div id="pareti_nord" style="display: none;">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="tipo_pareti_n">Pareti</label>
                        <select class="form-control" id="tipo_pareti_n" name="tipo_pareti_n">
                            <option selected>Seleziona</option>
                            <option value="parete_omogenea">Parete omogenea</option>
                            <option value="parete_leggera_con_telaio_in_legno">Parete leggera con telaio in legno</option>
                            <option value="parete_in_mattoni">Parete in mattoni</option>
                            <option value="parete_con_intercapedine">Parete con intercapedine</option>
                            <option value="parete_con_intercapedine_tra_2_abitazioni">Parete con intercapedine tra 2 abitazioni</option>
                        </select>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="spessore-nord" >Spessore</label>
                        <input class="form-control" type="number" id="spessore-nord" name="spessore-nord">

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="colore-n">Colore</label>
                        <select class="form-control" id="colore-nord" name="colore-nord">
                            <option selected>Seleziona</option>
                            <option value="colore_nord1">Bianco</option>
                            <option value="colore_nord2">Rosso</option>
                            <option value="colore_nord3">Giallo</option>
                            <option value="colore_nord4">Verde</option>
                            <option value="colore_nord5">Grigio</option>
                        </select>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="materiale_n" >Materiale</label>
                        <select class="form-control" id="materiale_n" name="materiale-nord">
                            <option selected>Seleziona</option>
                            <option value="materiale_parete_nord1">Tufi</option>
                            <option value="materiale_parete_nord2">Mattoni</option>
                            <option value="materiale_parete_nord3">Cartongesso</option>
                            <option value="materiale_parete_nord4">Marmo</option>
                            <option value="materiale_parete_nord5">Legno</option>
                        </select>

                    </div>
                </div>
                <!--<button id="hide_pareti_n" style="margin-left: 88%">Chiudi</button>-->
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <label for="n_pareti_sud">Quante pareti sono esposte a sud?</label>
            <input class="form-control numero-caratteristiche"  type="number" id="n_pareti_sud">
            <!--<button id="show_pareti_s" style="margin-left: 90%">Ok</button>-->

            <div id="pareti_sud" style="display: none;">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="tipo_pareti_s">Pareti</label>
                        <select class="form-control" id="tipo_pareti_s" name="tipo_pareti_s">
                            <option selected>Seleziona</option>
                            <option value="parete_sud1">Parete omogenea</option>
                            <option value="parete_sud2">Parete leggera con telaio in legno</option>
                            <option value="parete_sud3">Parete in mattoni</option>
                            <option value="parete_sud4">Parete con intercapedine</option>
                            <option value="parete_sud5">Parete con intercapedine tra 2 abitazioni</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="spessore-sud">Spessore</label>
                        <input class="form-control" type="number" id="spessore-sud" name="spessore-sud">

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="colore_s" >Colore</label>
                        <select class="form-control" id="colore_s" name="colore-sud">
                            <option selected>Seleziona</option>
                            <option value="colore_sud1">Bianco</option>
                            <option value="colore_sudd2">Rosso</option>
                            <option value="colore_sudd3">Giallo</option>
                            <option value="colore_sud4">Verde</option>
                            <option value="colore_sud5">Grigio</option>
                        </select>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="materiale_s">Materiale</label>
                        <select class="form-control" id="materiale_s" name="materiale-sud">
                            <option selected>Seleziona</option>
                            <option value="materiale_parete_sud1">Tufi</option>
                            <option value="materiale_parete_sud2">Mattoni</option>
                            <option value="materiale_parete_sud3">Cartongesso</option>
                            <option value="materiale_parete_sud4">Marmo</option>
                            <option value="materiale_parete_sud5">Legno</option>
                        </select>

                    </div>
                </div>
                <!--<button id="hide_pareti_s" style="margin-left: 88%">Chiudi</button>-->
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <label for="n_pareti_e">Quante pareti sono esposte a est?</label>
            <input class="form-control numero-caratteristiche" id="n_pareti_e" type="number">
            <!--<button id="show_pareti_e" style="margin-left: 90%">Ok</button>-->

            <div id="pareti_est" style="display: none;">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="tipo_pareti_e">Pareti</label>
                        <select class="form-control" id="tipo_pareti_e" name="tipo_pareti_e">
                            <option selected>Seleziona</option>
                            <option value="parete_est1">Parete omogenea</option>
                            <option value="parete_est2">Parete leggera con telaio in legno</option>
                            <option value="parete_est3">Parete in mattoni</option>
                            <option value="parete_est4">Parete con intercapedine</option>
                            <option value="parete_est5">Parete con intercapedine tra 2 abitazioni</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="spessore-est">Spessore</label>
                        <input class="form-control" type="number" id="spessore-est" name="spessore-est">

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="colore_e" >Colore</label>
                        <select class="form-control" id="colore_e" name="colore-est">
                            <option selected>Seleziona</option>
                            <option>Giallo</option>
                            <option>Rosso</option>
                            <option>Bianco</option>
                            <option>Verde</option>
                            <option>Grigio</option>
                        </select>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="materiale_e">Materiale</label>
                        <select class="form-control" id="materiale_e" name="materiale-est">
                            <option selected>Seleziona</option>
                            <option value="materiale_parete_est1">Tufi</option>
                            <option value="materiale_parete_est2">Mattoni</option>
                            <option value="materiale_parete_est3">Cartongesso</option>
                            <option value="materiale_parete_est4">Marmo</option>
                            <option value="materiale_parete_est5">Legno</option>
                        </select>

                    </div>
                </div>
                <!--<button id="hide_pareti_e" style="margin-left: 88%">Chiudi</button>-->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <label for="n_pareti_o">Quante pareti sono esposte a ovest?</label>
            <input class="form-control numero-caratteristiche" id="n_pareti_o" type="number">
            <!--<button id="show_pareti_o" style="margin-left: 90%">Ok</button>-->

            <div id="pareti_ovest" style="display: none;">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="tipo_pareti_o">Pareti</label>
                        <select class="form-control" id="tipo_pareti_o" name="tipo_pareti_o">
                            <option selected>Seleziona</option>
                            <option value="parete_ovest1">Parete omogenea</option>
                            <option value="parete_ovest2">Parete leggera con telaio in legno</option>
                            <option value="parete_ovest3">Parete in mattoni</option>
                            <option value="parete_ovest4">Parete con intercapedine</option>
                            <option value="parete_ovest5">Parete con intercapedine tra 2 abitazioni</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="spessore-ovest">Spessore</label>
                        <input class="form-control" type="number" id="spessore-ovest" name="spessore-ovest">

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="colore_o" >Colore</label>
                        <select class="form-control" id="colore_o" name="colore-ovest">
                            <option selected>Seleziona</option>
                            <option value="colore_ovest1">Bianco</option>
                            <option value="colore_ovest2">Rosso</option>
                            <option value="colore_ovest3">Giallo</option>
                            <option value="colore_ovest4">Verde</option>
                            <option value="colore_ovest5">Grigio</option>
                        </select>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="materiale_o">Materiale</label>
                        <select class="form-control" id="materiale_o" name="materiale-ovest">
                            <option selected>Seleziona</option>
                            <option value="materiale_parete_ovest1">Tufi</option>
                            <option value="materiale_parete_ovest2">Mattoni</option>
                            <option value="materiale_parete_ovest3">Cartongesso</option>
                            <option value="materiale_parete_ovest4">Marmo</option>
                            <option value="materiale_parete_ovest5">Legno</option>
                        </select>

                    </div>
                </div>
                <!--<button id="hide_pareti_o" style="margin-left: 88%">Chiudi</button>-->
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 20px">
        <div class="col-sm-3"> <h4>La ventilazione</h4></div>
        <div class="col-sm-6">
            <label for="n_finestre_n">Quante finestre sono esposte a nord?</label>
            <input class="form-control numero-caratteristiche" id="n_finestre_n" type="number">
            <!--<button id="show_finestre_n" style="margin-left: 90%">Ok</button>-->

            <div id="finestre_nord" style="display: none;">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="forma_finestre_n">Forma</label>
                            <select class="form-control" id="forma_finestre_n" name="forma_finestre-n">
                                <option selected>Seleziona</option>
                                <option value="forma1">opzione 1</option>
                                <option value="forma2">opzione 2</option>
                                <option value="forma3">opzione 3</option>
                                <option value="forma4">opzione 4</option>
                                <option value="forma5">opzione 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="dim_fin_n">Dimensione</label>
                            <input class="form-control" type="number" id="dim_fin_n" name="dim_fin_n">

                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="mat_fin_n">Materiale</label>
                            <select class="form-control" id="mat_fin_n" name="mat_fin_n">
                                <option selected>Seleziona</option>
                                <option value="materiale1">opzione 1</option>
                                <option value="materiale2">opzione 2</option>
                                <option value="materiale3">opzione 3</option>
                                <option value="materiale4">opzione 4</option>
                                <option value="materiale5">opzione 5</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="tende_fin_n">Tende</label>
                            <select class="form-control" id="tende_fin_n" name="tende_fin_n">
                                <option selected>Seleziona</option>
                                <option value="tende1">opzione 1</option>
                                <option value="tende2">opzione 2</option>
                                <option value="tende3">opzione 3</option>
                                <option value="tende4">opzione 4</option>
                                <option value="tende5">opzione 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="chius_fin_n">Chiusure</label>
                            <select class="form-control" id="chius_fin_n" name="chius_fin_n">
                                <option selected>Seleziona</option>
                                <option value="chiusure1">opzione 1</option>
                                <option value="chiusure2">opzione 2</option>
                                <option value="chiusure3">opzione 3</option>
                                <option value="chiusure4">opzione 4</option>
                                <option value="chiusure5">opzione 5</option>
                            </select>

                        </div>
                    </div>
                    <!--<button id="hide_finestre_n" style="margin-left: 88%">Chiudi</button>-->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <label for="n_finestre_s">Quante finestre son esposte a sud?</label>
            <input class="form-control numero-caratteristiche" id="n_finestre_s" type="number" name="n_finestre_s">
            <!--<button id="show_finestre_s" style="margin-left: 90%">Ok</button>-->

            <div id="finestre_sud" style="display: none;">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="forma_finestre_s">Forma</label>
                            <select class="form-control" id="forma_finestre_s" name="forma_finestre_s">
                                <option selected>Seleziona</option>
                                <option value="forma1">opzione 1</option>
                                <option value="forma2">opzione 2</option>
                                <option value="forma3">opzione 3</option>
                                <option value="forma4">opzione 4</option>
                                <option value="forma5">opzione 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="dim_fin_s">Dimensione</label>
                            <input class="form-control" type="number" id="dim_fin_s" name="dim_fin_s">

                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="mat_fin_s">Materiale</label>
                            <select class="form-control" id="mat_fin_s" name="mat_fin_s">
                                <option selected>Seleziona</option>
                                <option value="materiale1">opzione 1</option>
                                <option value="materiale2">opzione 2</option>
                                <option value="materiale3">opzione 3</option>
                                <option value="materiale4">opzione 4</option>
                                <option value="materiale5">opzione 5</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="tende_fin_s">Tende</label>
                            <select class="form-control" id="tende_fin_s" name="tende_fin_s">
                                <option selected>Seleziona</option>
                                <option value="tende1">opzione 1</option>
                                <option value="tende2">opzione 2</option>
                                <option value="tende3">opzione 3</option>
                                <option value="tende4">opzione 4</option>
                                <option value="tende5">opzione 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="chius_fin_s">Chiusure</label>
                            <select class="form-control" id="chius_fin_s" name="chius_fin_s">
                                <option selected>Seleziona</option>
                                <option value="chiusure1">opzione 1</option>
                                <option value="chiusure2">opzione 2</option>
                                <option value="chiusure3">opzione 3</option>
                                <option value="chiusure4">opzione 4</option>
                                <option value="chiusure5">opzione 5</option>
                            </select>

                        </div>
                    </div>
                    <!--<button id="hide_finestre_s" style="margin-left: 88%">Chiudi</button>-->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <label for="n_finestre_e">Quante finestre son esposte a est?</label>
            <input class="form-control numero-caratteristiche" id="n_finestre_e" type="number" name="n_finestre_e">
            <!--<button id="show_finestre_e" style="margin-left: 90%">Ok</button>-->

            <div id="finestre_est" style="display: none;">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="forma_finestre_e">Forma</label>
                            <select class="form-control" id="forma_finestre_e" name="forma_finestre_e">
                                <option selected>Seleziona</option>
                                <option value="forma1">opzione 1</option>
                                <option value="forma2">opzione 2</option>
                                <option value="forma3">opzione 3</option>
                                <option value="forma4">opzione 4</option>
                                <option value="forma5">opzione 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="dim_fin_e">Dimensione</label>
                            <input class="form-control" type="number" id="dim_fin_e" name="dim_fin_e">

                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="mat_fin_e">Materiale</label>
                            <select class="form-control" id="mat_fin_e" name="mat_fin_e">
                                <option selected>Seleziona</option>
                                <option>opzione 1</option>
                                <option>opzione 2</option>
                                <option>opzione 3</option>
                                <option>opzione 4</option>
                                <option>opzione 5</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="tende_fin_e">Tende</label>
                            <select class="form-control" id="tende_fin_e" name="tende_fin_e">
                                <option selected>Seleziona</option>
                                <option value="tende1">opzione 1</option>
                                <option value="tende2">opzione 2</option>
                                <option value="tende3">opzione 3</option>
                                <option value="tende4">opzione 4</option>
                                <option value="tende5">opzione 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="chius_fin_e">Chiusure</label>
                            <select class="form-control" id="chius_fin_e" name="chius_fin_e">
                                <option selected>Seleziona</option>
                                <option value="chiusure1">opzione 1</option>
                                <option value="chiusure2">opzione 2</option>
                                <option value="chiusure3">opzione 3</option>
                                <option value="chiusure4">opzione 4</option>
                                <option value="chiusure5">opzione 5</option>
                            </select>

                        </div>
                    </div>
                    <!--<button id="hide_finestre_e" style="margin-left: 88%">Chiudi</button>-->
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <label for="n_finestre_o">Quante finestre son esposte a ovest?</label>
            <input class="form-control numero-caratteristiche" id="n_finestre_o" type="number">
            <!--<button id="show_finestre_o" style="margin-left: 90%">Ok</button>-->

            <div id="finestre_ovest" style="display: none;">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="forma_finestre_o">Forma</label>
                            <select class="form-control" id="forma_finestre_o" name="forma_finestra_o">
                                <option selected>Seleziona</option>
                                <option value="forma1">opzione 1</option>
                                <option value="forma2">opzione 2</option>
                                <option value="forma3">opzione 3</option>
                                <option value="forma4">opzione 4</option>
                                <option value="forma5">opzione 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="dim_fin_o">Dimensione</label>
                            <input class="form-control" type="number" id="dim_fin_o" name="dim_fin_o">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="mat_fin_o">Materiale</label>
                            <select class="form-control" id="mat_fin_o" name="mat_fin_o">
                                <option selected>Seleziona</option>
                                <option value="materiale1">opzione 1</option>
                                <option value="materiale2">opzione 2</option>
                                <option value="materiale3">opzione 3</option>
                                <option value="materiale4">opzione 4</option>
                                <option value="materiale5">opzione 5</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="tende_fin_o">Tende</label>
                            <select class="form-control" id="tende_fin_o" name="tende_fin_o">
                                <option selected>Seleziona</option>
                                <option value="tende1">opzione 1</option>
                                <option value="tende2">opzione 2</option>
                                <option value="tende3">opzione 3</option>
                                <option value="tende4">opzione 4</option>
                                <option value="tende5">opzione 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="chius_fin_o">Chiusure</label>
                            <select class="form-control" id="chius_fin_o" name="chius_fin_o">
                                <option selected>Seleziona</option>
                                <option value="chiusure1">opzione 1</option>
                                <option value="chiusure2">opzione 2</option>
                                <option value="chiusure3">opzione 3</option>
                                <option value="chiusure4">opzione 4</option>
                                <option value="chiusure5">opzione 5</option>
                            </select>

                        </div>
                    </div>
                    <!--<button id="hide_finestre_o" style="margin-left: 88%">Chiudi</button>-->
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 20px">
        <div class="col-sm-3"><h4>Tetto e pavimento</h4></div>
        <div class="col-sm-3" >

            <div class="form-group">
                <label for="tipo_tetto">Tipo tetto</label>
                <select class="form-control" id="tipo_tetto" name="tipo_tetto">
                    <option selected>Seleziona</option>
                    <option value="tetto1">opzione 1</option>
                    <option value="tetto2">opzione 2</option>
                    <option value="tetto3">opzione 3</option>
                    <option value="tetto4">opzione 4</option>
                    <option value="tetto5">opzione 5</option>
                </select>

            </div>
        </div>
        <div class="col-sm-3" >

            <div class="form-group">
                <label for="tipo_pavimento">Tipo pavimento</label>
                <select class="form-control" id="tipo_pavimento" name="tipo_pavimento">
                    <option selected>Seleziona</option>
                    <option value="pavimento1">opzione 1</option>
                    <option value="pavimento2">opzione 2</option>
                    <option value="pavimento3">opzione 3</option>
                    <option value="paviemnto4">opzione 4</option>
                    <option value="paviemnto5">opzione 5</option>
                </select>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">

            <div class="form-group">
                <label for="materiale_tetto">Materiale tetto</label>
                <select class="form-control" id="materiale_tetto" name="materiale-tetto">
                    <option selected>Seleziona</option>
                    <option value="materiale1">opzione 1</option>
                    <option value="materiale2">opzione 2</option>
                    <option value="materiale3">opzione 3</option>
                    <option value="materiale4">opzione 4</option>
                    <option value="materiale5">opzione 5</option>
                </select>

            </div>
        </div>
        <div class="col-sm-3" >

            <div class="form-group">
                <label for="materiale_pav">Materiale pavimento</label>
                <select class="form-control" id="materiale_pav" name="materiale-pavimento">
                    <option selected>Seleziona</option>
                    <option value="materiale1">opzione 1</option>
                    <option value="materiale2">opzione 2</option>
                    <option value="materiale3">opzione 3</option>
                    <option value="materiale4">opzione 4</option>
                    <option value="materiale5">opzione 5</option>
                </select>

            </div>
        </div>

    </div>
    <div class="panel-footer">
        <a href="2_dettagli_generali_immobile.html"> <button class="btn btn-default">Torna indietro</button></a>
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
<!-- jQuery e plugin JavaScript  -->

<script src="js/bootstrap.min.js"></script>
</body>
</html>