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
},1000)

//Validação do formulario de cadastro de usuario
$("#formcadastrousuario").validate({
    rules: {
        nome: {
            required: true,
            minlength: 3,
            maxlength: 60
        }
    },
    messages: {
        nome: {
            required: function required(){
                M.toast({html: 'O campo nome é obrigatório!', classes: 'rounded'})
            },
            minlength: function minlength() {
                M.toast({html: 'Por favor, preencha ao menos 3 caracteres no campo nome.', classes: 'rounded'})
            }
            
        }
    }
});
