$("#frm-login").on("submit", function(){    
    event.preventDefault();
    //sData = "{login:"+$("#nomeLogin").val()+",senha:"+$("#senhaLogin").val()+"}";
    sData = JSON.stringify({
        login: $("#nomeLogin").val(),
        senha: $("#senhaLogin").val()
    });
    sDataLogin = JSON.stringify({
        ok: true
    });    
    $.ajax({
        url: 'controller/ControllerLogin.php',
        type: 'POST',
        data: JSON.parse(sData),
        success: function(response) {
            console.log(response);
        }
    });    
});