// Validação e verificação do checkbox dos Termos: Privacidade e Uso
function exibeAlertaTermo() {
    if (!termoPriv.checked) {
        alert('Você precisa aceitar os Termos, antes de prosseguir.');
    }
}

// Validação do CEP: Game House
var cepCompleto = document.getElementById('cep_gh');

cep_gh.addEventListener('blur', function () {
    var expCep = /(\d{2})(\d{3})(\d{3})/g;
    var cepValido = expCep.exec(cepCompleto.value);
    var msgCep = '';

    if (cepValido === null) {
        msgCep = 'Digite apenas números. Sem pontos ou traços';
        console.log(msgCep);
    }

    cepCompleto.setCustomValidity(msgCep);

})

// Validação do CNPJ: Game House
var cnpjCompleto = document.getElementById('cnpj_gh');

cnpj_gh.addEventListener('blur', function () {
    var expCnpj = /(\d{2})(\d{3})(\d{3})/g;
    var cnpjValido = expCnpj.exec(cnpjCompleto.value);
    var msgCnpj = '';

    if (cnpjValido === null) {
        msgCnpj = 'Digite apenas números. Sem pontos ou traços';
        console.log(msgCnpj);
    }

    cnpjCompleto.setCustomValidity(msgCnpj);

})

// Validação do Contato: Game House
var telefone = document.querySelector('#contato_gh');

telefone.addEventListener('blur', (evento) => {
    verificaTelefone(evento.target);
})

function verificaTelefone(elemento) {
    var expTel = /(^\(?[0]?[1-9]{2}\)?)[.-\s]?([9]?[\s]?[1-9]\d{3})[.-\s]?(\d{4})$/g;
    var telValido = expTel.exec(elemento.value);
    console.log(telValido);
    var msgTel = '';

    if (!telValido) {
        msgTel = 'Insira um número de telefone válido com DDD e o 9';
        console.log(!telValido);
    }

    elemento.setCustomValidity(msgTel);
}

//Validação E-Mail: Game House
var emailCompleto = document.querySelector('#email_gh')

emailCompleto.addEventListener('blur', function () {
    var expEmail = /^([\w_.]*)@([\w-.]*)\.([a-z.]){3,6}$/g;
    var verificaEmail = expEmail.exec(emailCompleto.value);
    var msgEmail = '';

    if (verificaEmail === null) {
        msgEmail = 'Digite um e-mail válido';
    }

    emailCompleto.setCustomValidity(msgEmail);
})

//Validação da Data de Nascimento: Streamer
var dataNascimento = document.querySelector('#nasc_streamer');

dataNascimento.addEventListener('blur', (evento) => {
    validaDataNascimento(evento.target);
})

// Validação do CPF: Streamer
var cpfCompleto = document.getElementById('cpf_streamer');

cpf_streamer.addEventListener('blur', function () {
    var expCpf = /(\d{3})(\d{3})(\d{3})(\d{2})/g;
    var cpfValido = expCpf.exec(cpfCompleto.value);
    var msgCpf = '';

    if (cpfValido === null) {
        msgCpf = 'Digite apenas números. Sem pontos ou traços';
        console.log(msgCpf);
    }

    cpfCompleto.setCustomValidity(msgCpf);

})

//Validação E-Mail: Streamer
var emailCompleto = document.querySelector('#email_streamer')

emailCompleto.addEventListener('blur', function () {
    var expEmail = /^([\w_.]*)@([\w-.]*)\.([a-z.]){3,6}$/g;
    var verificaEmail = expEmail.exec(emailCompleto.value);
    var msgEmail = '';

    if (verificaEmail === null) {
        msgEmail = 'Digite um e-mail válido';
    }

    emailCompleto.setCustomValidity(msgEmail);
})

// Validação do Contato: Streamer
var telefone = document.querySelector('#contato_streamer');

telefone.addEventListener('blur', (evento) => {
    verificaTelefone(evento.target);
})

function verificaTelefone(elemento) {
    var expTel = /(^\(?[0]?[1-9]{2}\)?)[.-\s]?([9]?[\s]?[1-9]\d{3})[.-\s]?(\d{4})$/g;
    var telValido = expTel.exec(elemento.value);
    console.log(telValido);
    var msgTel = '';

    if (!telValido) {
        msgTel = 'Insira um número de telefone válido com DDD e o 9';
        console.log(!telValido);
    }

    elemento.setCustomValidity(msgTel);
}