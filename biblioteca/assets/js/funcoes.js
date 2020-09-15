$(document).ready(function(){    
    aTbQuizz = [];            
    if (sessionStorage.getItem("tbQuizz")) {
        aTbQuizz = sessionStorage.getItem("tbQuizz");
        aTbQuizz = JSON.parse(aTbQuizz);        
    }
    $("#btn-resultado").hide();    
});

function incluirRegistro() {                     
    var oResposta = JSON.stringify({                
        r1 : $("#r1").is(':checked'),
        r2 : $("#r2").is(':checked'),
        r3 : $("#r3").is(':checked'),          
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
            $("#btn-cadastro").hide();
            $("#btn-resultado").show();                        
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
        var oRespostaFinal = JSON.stringify({
            usuario: 1,
            pergunta: parseInt(iCont) + 1,
            resposta: oResposta.r1+','+oResposta.r2+','+oResposta.r3            
        });                  
        $.ajax({            
            url: 'controller/ControllerQuiz.php',
            type: 'POST',
            data: JSON.parse(oRespostaFinal),                    
        });
    }    
}

$("#btn-resultado").click(function() {
    $.ajax({            
        url: 'controller/ControllerQuiz.php?usuario=1',
        type: 'GET',        
        success: function(response) {
            iAcertos = 0;
            aResposta = JSON.parse(response);            
            if (aResposta[0].resalternativa == "true,true,true") {
                iAcertos++;
            }
            if (aResposta[1].resalternativa == "false,true,false") {
                iAcertos++;
            }
            if (aResposta[2].resalternativa == "true,false,false") {
                iAcertos++;
            }
            if (iAcertos == 1) {
                $("#modal-body").append('<h1>Você acertou '+iAcertos+' questão</h1>');
            } else {
                $("#modal-body").append('<h1>Você acertou '+iAcertos+' questões</h1>');
            }                        
        }          
    });    
});