
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



