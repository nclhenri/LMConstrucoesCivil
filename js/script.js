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
