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

//Verifica se já existe e-mail cadastrado no banco e retorna uma mensagem
$("#email").blur(function () {
    var email = $("#email");
    $.ajax({
        url: '../../config/verificaEmail.php',
        type: 'POST',
        data: { "email": email.val() },
        success: function (data) {
            //console.log(data); 
            data = $.parseJSON(data);
            $("#retornoMsgEmail p").text(data.email);
            $("#retornoMsgEmail p").css("text-align", "center");
            $("#retornoMsgEmail p").css("color", "red");
            /*
            setTimeout(function(){
                M.toast({html: data.email, classes: 'rounded'})
            }, 500) 
            */
        }
    })
});

//Verifica o CEP e retorna bairro, cidade e estado para o usuário
$("#cep").blur(function () {
    var cep = $("#cep").val()
    $.ajax({
        url: 'http://viacep.com.br/ws/' + cep + "/json",
        type: 'GET',
        async: false
    }).done(function (data) {
        $("#endereco").text(data[bairro])
    }).fail(function () {
        $("#endereco").text("falha")
    })
})
/*
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
*/
//Validação do formulario de cadastro de usuario
$(document).ready(function () {
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
                number: false
            },
            senha: {
                required: true,
                minlength: 4,
                maxlength: 12
            }
        },
        messages: {
            nome: {
                required: 'Este campo é obrigatório',
            },
            email: {
                required: 'Este campo é obrigatório',
                email: 'Digite um e-mail válido',
            },
            telefone: {
                required: 'Este campo é obrigatório',
            },
            cep: {
                required: 'Este campo é obrigatório',
                number: 'Por favor, insira apenas números',
            },
            senha: {
                required: 'Este campo é obrigatório',
                minlength: 'A senha deve ter entre 4 e 8 caracteres',
                maxlength: 'A senha deve ter entre 4 e 8 caracteres',
            }
        },
        submitHandler: function (form) {
            var dados = $(form).serialize();
            $.ajax({
                type: "POST",
                url: "../../config/inserirUsuario.php",
                data: dados,
                async: false
            }).then(sucesso, falha);

            function sucesso(data) {
                $sucesso = $.parseJSON(data)["sucesso"];
                $mensagem = $.parseJSON(data)["mensagem"];

                if ($sucesso) {
                    setTimeout(function () {
                        window.location.href = "http://localhost/peton/public/index.php"
                    }, 3000)
                    Swal.fire({
                        icon: 'success',
                        title: $mensagem,
                        showConfirmButton: false,
                        timer: 3000
                    })
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: $mensagem,
                        showConfirmButton: true
                    })
                }
            }

            function falha() {
                console.log("erro");
            }
        }
    })
})

//Máscara nos input form cadastro usuario
$("#telefone").mask("(99) 9 9999-9999");
$("#cep").mask("99999-999");

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
    },*/