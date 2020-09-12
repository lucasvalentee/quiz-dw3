const doLogin = () => {
    event.preventDefault();  

    if(validateLogin()) {
        $.ajax({

        });
    }
}

const validateLogin = () => {
    let bValidation = true;

    if(!checkInputIsValid('nomeLogin')) {
        bValidation = false;
    }

    if(checkInputIsValid('senhaLogin')) {
        bValidation = false;
    }

    return bValidation;
}

const checkInputIsValid = (sNameInput) => {
    let bValidation = true;
    $(`#${sNameInput}`).removeClass('is-invalid');

    if(!$(`#${sNameInput}`).val()) {
        $(`#${sNameInput}`).addClass('is-invalid')
        bValidation = false;
    }

    return bValidation;
}