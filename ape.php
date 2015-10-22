<?php

    ape_connect();

    //global $step;

	if (isset($_POST['step'])) {
		$step = $_POST['step'];
	} else {
		$step = 0;
	}
    echo $step;

    if($step > 0){

        switch($step){
            case 0:
                step0();
                require('0_lista_certificazioni.php');
                break;
            case 1:
                step1();
                require('1_dati_per_la_costruzione.php');
                break;
            case 2 :
                step2();
                require('2_dettagli_generali_immobile.php');
                break;
            case 3 :
                step3();
                break;
            case 4 :
                step4();
                break;
            case 5 :
                step5();
                require('5_raffrescamento.php');
                break;
            case 6 :
                step6();
                require('6_acqua_calda_sanitaria.php');
                break;
            case 7 :
                step7();
                require('7_fonti_rinnovabili.php');
                break;
        }
    }
    else {
        echo "Error. value not present";
    }

    function step0(){}

    function step1(){}

    function step2(){}

    function step3()
    {
        global $mysqli;

        //phpinfo();
        require('3_caratteristiche.php');

        $query_characteristics = "INSERT INTO characteristichs  (dispersing_surface, net_volum,
                                  roof, floor, material_floor, material_roof)
                              VALUES ('{$_POST['superficie']}', '{$_POST['volume']}',
                                      '{$_POST['tipo_tetto']}', '{$_POST['tipo_pavimento']}',
                                      '{$_POST['materiale-pavimento']}', '{$_POST['materiale-tetto']}')";

        //var_dump($query_characteristics);
        //var_dump($mysqli);

        mysqli_query($mysqli, $query_characteristics) or die(mysqli_error($mysqli));

        $query_walls = "INSERT INTO walls (type_walls_north, type_walls_south, type_walls_east, type_walls_west,
                    number_walls_north, number_walls_south, number_walls_east, number_walls_west,
                    color_north, color_south, color_east, color_west,
                    width_north, width_south, width_east, width_west,
                    material_north, material_south, material_east, material_west)
                    VALUES ('{$_POST['tipo_pareti_n']}', '{$_POST['tipo_pareti_s']}',
                    '{$_POST['tipo_pareti_e']}', '{$_POST['tipo_pareti_o']}',
                    '{$_POST['numero_pareti_nord']}', '{$_POST['n_pareti_sud']}',
                    '{$_POST['n_pareti_est']}', '{$_POST['n_pareti_o']}',
                    '{$_POST['colore-nord']}', '{$_POST['colore-sud']}', '{$_POST['colore-est']}', '{$_POST['colore-ovest']}',
                    '{$_POST['spessore-nord']}', '{$_POST['spessore-sud']}', '{$_POST['spessore-est']}', '{$_POST['spessore-ovest']}',
                    '{$_POST['materiale-nord']}', '{$_POST['materiale-sud']}', '{$_POST['materiale-est']}', '{$_POST['materiale-ovest']}'
                    )";

        mysqli_query($mysqli, $query_walls) or die(mysqli_error($mysqli));

        $query_windows = "INSERT INTO windows (
                          number_w_north, number_w_south, number_w_east, number_w_west,
                          shape_windows_north, shape_windows_south, shape_windows_east, shape_windows_west,
                          width_north, width_south, width_east, width_west,
                          material_north, material_south, material_east, material_west,
                          closures_north, closures_south, closures_east, closures_west,
                          curtains_north, curtians_south, curtains_east, curtains_west)
                          VALUES (
                          '{$_POST['n_finestre_n']}','{$_POST['n_finestre_s']}',
                          '{$_POST['n_finestre_e']}','{$_POST['n_finestre_o']}',
                          '{$_POST['forma_finestre_n']}','{$_POST['forma_finestre_s']}',
                          '{$_POST['forma_finestre_e']}', '{$_POST['forma_finestre_o']}',
                          '{$_POST['dim_fin_n']}', '{$_POST['dim_fin_s']}',
                          '{$_POST['dim_fin_e']}', '{$_POST['dim_fin_o']}',
                          '{$_POST['mat_fin_n']}', '{$_POST['mat_fin_s']}',
                          '{$_POST['mat_fin_e']}', '{$_POST['mat_fin_o']}',
                          '{$_POST['chius_fin_n']}', '{$_POST['chius_fin_s']}',
                          '{$_POST['chius_fin_e']}', '{$_POST['chius_fin_o']}',
                          '{$_POST['tende_fin_n']}', '{$_POST['tende_fin_s']}',
                          '{$_POST['tende_fin_e']}', '{$_POST['tende_fin_o']}')";

        mysqli_query($mysqli, $query_windows) or die(mysqli_error($mysqli));

    }

    function step4(){

        //global $mysqli;

        //var_dump($_POST);
        echo "prova riscaldamento";

        require('4_riscaldamento.php');


        /*$query_warmup = "INSERT INTO warm_up (emission, control, distribution, backlog, generation, thermal_power_plant)
                          VALUES ('{$_POST['emissione']}','{$_POST['controllo']}',
                          '{$_POST['distribuzione']}','{$_POST['accumulo']}', '{$_POST['generazione']}',
                          '{$_POST['termica']}')";*/



        /*if(($_POST['emissione'])==1){

            $query_warmup = "INSERT INTO warm_up (radiator1, radiator2, radiator3)
                              VALUES ('{$_POST['radiatore1']}', '{$_POST['radiatore2']}','{$_POST['radiatore3']}' )";
        }

        if(($_POST['control'])==1){

            $query_warmup = "INSERT INTO warm_up (thermostat1, thermostat2, thermostat3)
                              VALUES ('{$_POST['termostato1']}', '{$_POST['termostato2']}', '{$_POST['termostato3']}')";
        }*/


    }

    function step5(){

        global $mysqli;

        require('5_raffrescamento.php');
        var_dump(isset($_POST['raffrescamento3']));
        var_dump(isset($_POST['raffrescamento2']));
        $query_coling = "INSERT INTO coling (supply, control, distribution, backlog, supply1, supply2, supply3)
                          VALUES ('{$_POST['terminale-raff']}','{$_POST['controllo-raff']}','{$_POST['distribuzione-raff']}','{$_POST['perdite-raff']}',
                           '{$_POST['raffrescamento1']}','{$_POST['raffrescamento2']}','{$_POST['raffrescamento3']}')";
        echo $query_coling;
        mysqli_query($mysqli, $query_coling) or die(mysqli_error($mysqli));


    }

    function step6(){}

    function step7(){}

    function ape_connect(){
        global $mysqli;

        error_reporting(E_ALL);

        $mysqli = new mysqli("localhost", "root", "user", "ape");
        if (mysqli_connect_errno()){
            echo "Errore di connessione";
            exit();
        }
        else{
            echo "Connessione corretta";
        }

    }

    function ape_disconnect()
    {
        global $mysqli;
        mysqli_close($mysqli);

    }