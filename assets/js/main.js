//Ativa o icóne de hambúrguer (menu) no header para dispositivos móveis
const elemsSidenav = document.querySelectorAll(".sidenav");
const instancesSidenav = M.Sidenav.init(elemsSidenav, {
    edge: "left"
});


//Ativa a barra de progresso (preloader) antes de carregar o formulário de cadastro
/*
document.querySelector("#content").style.display="none";
    document.querySelector("#flayer").classList.add("progress");
    document.querySelector("#slayer").classList.add("indeterminate");

setTimeout(function(){
    document.querySelector("#flayer").classList.remove("progress");
    document.querySelector("#slayer").classList.remove("indeterminate");
    document.querySelector("#content").style.display="block";
},1000)
*/

//Verifica se já existe e-mail no banco
var email = $("#email"); 
    email.blur(function() { 
        $.ajax({ 
            url: '../../config/verificaEmail.php', 
            type: 'POST', 
            data:{"email" : email.val()},
                success: function(data) { 
                    //console.log(data); 
                    data = $.parseJSON(data); 
                    //$("#resposta").text(data.email);
                    setTimeout(function(){
                        M.toast({html: data.email, classes: 'rounded'})
                    }, 500) 
                }
    })
});

//Verifica o CEP e retorna bairro, cidade e estado para o usuário
var cep = $("#cep"); 
    cep.blur(function() { 
        $.ajax({ 
            url: '../../config/buscaCEP.php', 
            type: 'POST', 
            data:{"cep" : cep.val()},
                success: function(data) { 
                    //console.log(data); 
                    data = $.parseJSON(data); 
                    $("#endereco").text(data.cep);
                    $("#endereco").css("text-align" , "center");
                }
        })
    });

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
                required: 'Por favor, preencha o campo NOME.',
            },
            email: {
                required: 'Por favor, preencha o campo E-MAIL.',
                email: 'Digite um e-mail válido',
            },
            telefone: {
                required: 'Por favor, preencha o campo TELEFONE.',
            },
            cep: {
                required: 'Por favor, preencha o campo CEP.',
                number: 'Por favor, insira apenas números.',
            },
            senha: {
                required: 'Por favor, preencha o campo SENHA.',
            }
        },
        submitHandler: function( form ){
            var dados = $( form ).serialize();
            $.ajax({
                type: "POST",
                url: "../../config/inserirUsuario.php",
                data: dados,
                error: function(){
                    alert('Erro: Inserir Registo!!');
                },
                success: function( result ){
                    if($.trim(result) == "1"){

                        setTimeout(function(){
                            window.location.href = "http://localhost/peton/public/index.php"
                        }, 3000)
    
                        Swal.fire({
                            title: "Usuário cadastrado com sucesso!",
                            icon: "success",
                            showConfirmButton: false,
                            timer: 3000
                        })
                    }else{
                        Swal.fire({
                            title: "Não possível efetuar o cadastro! Confira os dados e tente novamente.",
                            icon: "error",
                            showConfirmButton: true,
                        })
                    }
                    /*
                    setTimeout(function(){
                        window.location.href = "http://localhost/peton/public/index.php"
                    }, 3000)

                    Swal.fire({
                        title: "Usuário cadastrado com sucesso!",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 3000
                    })
                    */
                    
                }
            });
            return false;
        }
    });
})

//Máscara nos input form cadastro usuario
    $("#telefone").mask("(99) 9 9999-9999");
    //$("#cep").mask("99999-999");

    /* Exibindo mensagens de erro do jQuery validate com o alert do materialize. Para ser guardado!
    messages: {
        nome: {
            required: 'Preencha o campo nome',
        },
        email: {
            required: function required(){
                M.toast({html: 'O campo E-MAIL é obrigatório!', classes: 'rounded'})
            },
            email: function required(){
                M.toast({html: 'Digite um E-MAIL válido!', classes: 'rounded'})
            }
        },
        */