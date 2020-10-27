//Ativa o icóne de hambúrguer (menu) no header para dispositivos móveis
const elemsSidenav = document.querySelectorAll(".sidenav");
const instancesSidenav = M.Sidenav.init(elemsSidenav, {
    edge: "left"
});


//Ativa a barra de progresso (preloader) antes de carregar o formulário de cadastro
document.querySelector("#content").style.display="none";
    document.querySelector("#flayer").classList.add("progress");
    document.querySelector("#slayer").classList.add("indeterminate");

setTimeout(function(){
    document.querySelector("#flayer").classList.remove("progress");
    document.querySelector("#slayer").classList.remove("indeterminate");
    document.querySelector("#content").style.display="block";
},1500)
