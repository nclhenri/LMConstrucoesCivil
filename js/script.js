window.onscroll = function () {
    let top = window.scrollY;

    if (top > 550) {
        document.getElementById("topo2").classList.add("menufixo");
    }else{
        document.getElementById("topo2").classList.remove("menufixo");
    }
    
}
