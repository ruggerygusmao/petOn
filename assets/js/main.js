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


//Verifica se já existe e-mail no banco
$(document).keydown(function(){
    var email = $("#email"); 
        email.blur(function() { 
            $.ajax({ 
                url: "../../config/inserirUsuario.php", 
                type: "POST", 
                data:{"email" : email.val()}, 
                    success: function(data) {
                        console.log("existe")
                    },
                    error: function(){
                        console.log("nao existe")
                    }
            }); 
        }); 
})

//Validação do formulario de cadastro de usuario
$(document).ready(function(){
    $("#formcadastrousuario").validate({
        rules: {
            nome: {
                required: true,
                maxlength: 100
            },
            email: {
                email: true,
                required: true
            },
            telefone: {
                required: true
            },
            cep: {
                required: true,
                number: true
            },
            senha: {
                required: true
            }
        },
        messages: {
            nome: {
                required: function required(){
                    M.toast({html: 'O campo NOME é obrigatório!', classes: 'rounded'})
                },
                minlength: function minlength() {
                    M.toast({html: 'Por favor, preencha ao menos 3 caracteres no campo nome.', classes: 'rounded'})
                }
            },
            email: {
                required: function required(){
                    M.toast({html: 'O campo E-MAIL é obrigatório!', classes: 'rounded'})
                },
                email: function required(){
                    M.toast({html: 'Digite um E-MAIL válido!', classes: 'rounded'})
                }
            },
            telefone: {
                required: function required(){
                    M.toast({html: 'O campo TELEFONE é obrigatório!', classes: 'rounded'})
                }
            },
            cep: {
                required: function required(){
                    M.toast({html: 'O campo CEP é obrigatório!', classes: 'rounded'})
                }
            },
            senha: {
                required: function required(){
                    M.toast({html: 'O campo SENHA é obrigatório!', classes: 'rounded'})
                }
            }
        },
        submitHandler: function( form ){
            var dados = $( form ).serialize();
            $.ajax({
                type: "POST",
                url: "../../config/inserirUsuario.php",
                data: dados,
                success: function( data )
                {

                    setTimeout(function(){
                        window.location.href = "http://localhost/peton/public/index.php"
                    }, 3000)
                    Swal.fire({
                        title: "Usuário cadastrado com sucesso!",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 3000
                    })
                    
                }
            });
            return false;
        }
    });
})

//Máscara nos input form cadastro usuario
    $("#telefone").mask("(99) 9 9999-9999");
    //$("#cep").mask("99999-999");