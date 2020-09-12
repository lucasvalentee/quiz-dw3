$(document).ready(function(){    
    aTbQuizz = [];            
    if (sessionStorage.getItem("tbQuizz")) {
        aTbQuizz = sessionStorage.getItem("tbQuizz");
        aTbQuizz = JSON.parse(aTbQuizz);        
    }    
});

function incluirRegistro() {                     
    var oResposta = JSON.stringify({        
        p1 : $("#r1").is(':checked'),
        p2 : $("#r2").is(':checked'),
        p3 : $("#r3").is(':checked'),          
    });     
    aTbQuizz.push(oResposta);    
    sessionStorage.setItem("tbQuizz", JSON.stringify(aTbQuizz));    
    resetarCampos();
    return true;
}

$("#frmCadastro").on("submit", function() {
    event.preventDefault();           
    incluirRegistro();
    verificaPergunta();    
});

function verificaPergunta() {       
    iPergunta = parseInt($("#codigo").val());
    switch (iPergunta) {
        case 1:
            carregaPergunta2();
            $("#codigo").val(2);
            break;
        case 2:
            carregaPergunta3();
            $("#codigo").val(3);
            break;
        case 3:
            $("#modalCadastros").hide();
            $(".modal-backdrop").hide()                    
            insereApi();
            sessionStorage.clear();
    }
}

function resetarCampos() {
    $("#frmCadastro").each(function(){
        this.reset();        
    });
}

function carregaPergunta2() {
    $("#pergunta").text('2 - Você quebrou um teclado?');
}

function carregaPergunta3() {
    $("#pergunta").text('3 - Você trabalha?');
}

function insereApi() {
    for (var iCont in aTbQuizz) {        
        var oResposta = JSON.parse(aTbQuizz[iCont]);        
        $.ajax({
            url: 'controller/ControllerQuiz.php',
            type: 'POST',
            data: oResposta            
        });
    }    
}