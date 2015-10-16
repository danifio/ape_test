$(document).ready(function(){
    aggiorna_dati_caratteristiche();

    aggiorna_dati_costruzione();

    $(".numero-caratteristiche").change(function(){
        aggiorna_dati_caratteristiche()
    });

    $(".dettagli-costruzione").change(function(){
        aggiorna_dati_costruzione()
    });


});

function aggiorna_dati_costruzione() {


    $("#dati-architetto").click(function(){

        var isChecked = $("#dati-architetto").is(':checked');
        if(isChecked){
            $("#dettagli-architetto").show();
        }
        else{
            $("#dettagli-architetto").hide();
        }
    });

    $("#dati-impiantista").click(function(){

        var isChecked = $("#dati-impiantista").is(':checked');
        if(isChecked){
            $("#dettagli-impiantista").show();
        }
        else{
            $("#dettagli-impiantista").hide();
        }
    });

    $("#dati-costruttori").click(function(){

        var isChecked = $("#dati-costruttori").is(':checked');
        if(isChecked){
            $("#dettagli-costruttori").show();
        }
        else{
            $("#dettagli-costruttori").hide();
        }

    });

    $("#dati-direttore").click(function(){

        var isChecked = $("#dati-direttore").is(':checked');
        if(isChecked){
            $("#dettagli-direttore").show();
        }
        else{
            $("#dettagli-direttore").hide();
        }
    });

    $("#dati-impresa").click(function(){

        var isChecked = $("#dati-impresa").is(':checked');
        if(isChecked) {
            $("#dettagli-impresa").show();
        }
        else{
            $("#dettagli-impresa").hide();
        }
    });
}

function aggiorna_dati_caratteristiche(){

        if ($("#n_pareti_nord").val() <= 0) {
            $("#n_pareti_nord").val(0);
            $("#pareti_nord").hide();
        } else {
            $("#pareti_nord").show();
        }

        if ($("#n_pareti_sud").val() <= 0) {
            $("#n_pareti_sud").val(0);
            $("#pareti_sud").hide();
        } else {
            $("#pareti_sud").show();
        }

        if ($("#n_pareti_e").val() <= 0) {
            $("#n_pareti_e").val(0);
            $("#pareti_est").hide();
        } else {
            $("#pareti_est").show();
        }

        if ($("#n_pareti_o").val() <= 0) {
            $("#n_pareti_o").val(0);
            $("#pareti_ovest").hide();
        } else {
            $("#pareti_ovest").show();
        }

        if ($("#n_finestre_n").val() <= 0) {
            $("#n_finestre_n").val(0);
            $("#finestre_nord").hide();
        } else {
            $("#finestre_nord").show();
        }

        if ($("#n_finestre_s").val() <= 0) {
            $("#n_finestre_s").val(0);
            $("#finestre_sud").hide();
        } else {
            $("#finestre_sud").show();
        }

        if ($("#n_finestre_e").val() <= 0) {
            $("#n_finestre_e").val(0);
            $("#finestre_est").hide();
        } else {
            $("#finestre_est").show();
        }

        if ($("#n_finestre_o").val() <= 0) {
            $("#n_finestre_o").val(0);
            $("#finestre_ovest").hide();
        } else {
            $("#finestre_ovest").show();
        }
}
