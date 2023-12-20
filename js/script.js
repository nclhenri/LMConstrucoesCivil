window.onscroll = function () {
    let top = window.scrollY;

    if (top > 120) {
        document.getElementById("menuR").classList.add("menufixo");
    }else{
        document.getElementById("menuR").classList.remove("menufixo");
    }
    
}



document.querySelector(".abrirMenu").onclick = function () {
    document.documentElement.classList.add("menuMobile");
}
document.querySelector(".fecharMenu").onclick = function () {
    document.documentElement.classList.remove("menuMobile");
}

function EnviarWhats() {
    let assunto = '*LM Construções Civil*';
    let nome = '*Nome:* ' + document.querySelector('#nome').value;
    let email = '*E-mail:* ' + document.querySelector('#email').value;
    let fone = '*Telefone:* ' + document.querySelector('#fone').value;
    let mens = '*Mensagem:* ' + document.querySelector('#mens').value;

    let numeroWhats = '5511963531926'

    let quebraDeLinha = '%0A'

    window.open('https://api.whatsapp.com/send?phone=' + numeroWhats + '&text=' + assunto + quebraDeLinha + quebraDeLinha + nome + quebraDeLinha + email + quebraDeLinha + fone + quebraDeLinha + mens)
}



