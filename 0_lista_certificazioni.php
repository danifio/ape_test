<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" ><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista delle certificazioni</title>
    <!-- Fogli di stile -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/style.default.css" rel="stylesheet">
    <link href="css/style.custom.css" rel="stylesheet">
    <script src="js/jquery-1.11.1.min.js"></script>
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
    <h3>Lista dei tuoi immobili e delle certificazioni</h3><br><br>
    <form action="ape.php" method="post">
        <input type="hidden" name="step" value="0">
    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-primary mb30 centro-riga">
                    <thead>
                        <tr>
                            <th class="centro-riga">#</th>
                            <th class="centro-riga">ID</th>
                            <th class="centro-riga">Indirizzo immobile</th>
                            <th class="centro-riga">Operazioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>1</td>
                        <td>001</td>
                        <td>Via Trapani</td>
                        <td>
                            <a href="#" class="btn btn-xs btn-primary"><span class="fa fa-pencil"></span> Modifica</a>
                            <a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-download-alt"></span> Scarica</a>
                            <a href="#" class="btn btn-xs btn-danger"><span class="delete-row fa fa-trash-o"></span> Elimina</a>
                        </td>
                    </tbody>
                    <tbody>
                    <td>2</td>
                    <td>002</td>
                    <td>Via Sibilla</td>
                    <td>
                        <a href="#" class="btn btn-xs btn-primary"><span class="fa fa-pencil"></span> Modifica</a>
                        <a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-download-alt"></span> Scarica</a>
                        <a href="#" class="btn btn-xs btn-danger"><span class="delete-row fa fa-trash-o"></span> Elimina</a>
                    </td>
                    </tbody>
                    <tbody>
                    <td>3</td>
                    <td>003</td>
                    <td>Via Marsala</td>
                    <td>
                        <a href="#" class="btn btn-xs btn-primary"><span class="fa fa-pencil"></span> Modifica</a>
                        <a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-download-alt"></span> Scarica</a>
                        <a href="#" class="btn btn-xs btn-danger"><span class="delete-row fa fa-trash-o"></span> Elimina</a>
                    </td>
                    </tbody>
                </table>
            </div>
            <a href="primoaccesso.html" class="btn btn-primary pull-right">
                <b>Nuova certificazione</b>
            </a>
        </div>
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

<script src="js/bootstrap.min.js"></script>


</body>
</html>