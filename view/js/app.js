/**
 * Created by JGuilherme on 08/03/2017.
 */

$(document).ready(function(){

    $("#lista_menu_superior li").css({"color":"#191D3D"});
    //Controle da opacidade do menu superiot
    $(window).scroll(function (event) {
        var scrollWindow = $(document).scrollTop();
        var sliderArea = 520;
        var opacity;
        var menu = $("header");

        opacity = scrollWindow/sliderArea;
    
        if(opacity > 0 && opacity<=1){
            console.log(opacity);
            menu.css({"background":"rgba(25,29,61, "+opacity+")"});
        }
        if(opacity > 0.3){
            menu.css("color","#fff");
        }
        if(scrollWindow >= 520){
            menu.css({"background":"rgba(25,29,61, 1)"});
        }

    });

    //SlideShow
    var contImagem = 0;
    var timefunction = ['linear','ease','ease-in','ease-out','ease-in-out'];
    var randomAnimation;
       
    //Execução do slideshow
    function slider() {
        randomAnimation = timefunction[Math.floor(Math.random()*timefunction.length)];
        console.log(randomAnimation);
        $("#dv-slider").css({"background-image":"url(view/img/city_"+contImagem+".jpg)", "transition":"0.9s","animation-timing-function":""+randomAnimation+""});
    }

    //Automatizar slideshow
    function slideAutomatico() {
        slider();

        if(contImagem == 5){
            contImagem = 0;
        }else{
            contImagem ++;
        }
    }

    //Clique do botão voltar
    $("#img-prev").click(function () {
        if(contImagem == 0){
            contImagem = 5;
        }else {
            contImagem--;
        }
        slider();
    });

    //Clique do botão avançar
    $("#img-next").click(function () {
        if(contImagem == 5){
            contImagem = 0;
        }else {
            contImagem++;
        }
        slider();
    });


    var slide = setInterval(slideAutomatico,4000);

    //Quando o mouse estiver sobre o slider, pausar
    $("#dv-slider").mouseenter(function () {
        clearInterval(slide);
    });
    $("#dv-slider").mouseleave(function () {
        slide = setInterval(slideAutomatico,2000);
    });


    function onlyWord(word) {
        var regex = /^[A-Za-z\u00C0-\u017F\.\- ]+$/i;
        return regex.test(word);
    }


    $("#in-cad-nome").keydown(function (e) {
        e = e|| event;
        var char = e.which || e.keyCode;

        if(!onlyWord(String.fromCharCode(char)) && char !=8){
            e.preventDefault();
        }
    });

    $("#in-cel, #in-tel, #in-num, #in-cep").keypress(function(e){
        e = e|| event;
        var char = e.which || e.keyCode;

        if(!onlyNumber(String.fromCharCode(char))){
            e.preventDefault();
        }
    });

    function onlyNumber(number) {
        var regex = /^[0-9]+$/;
        return regex.test(number);
    }

    function validarEmail(email){
        var regex = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,22}/i;
        return regex.test(email);
    }

    function validarfrm1() {
        var nome = $("#in-cad-nome");
        var senha = $("#in-cad-senha");
        var confsenha = $("#in-cad-conf-senha");
        var email = $("#in-cad-email");

        if(nome.val().length < 4 ){
            alert("Nome deve ter mais de 4 caracteres");
            //$("#in-cad-nome").css("background","rgba(255,0,0, 0.4)");
            return false;
        }else if(senha.val().length < 8 || confsenha.val().length < 8){
            alert("Senha deve ter mais de 8 caracteres");
            return false;
        }else if(senha.val() != confsenha.val()){
            alert("Senhas não conferem!");
            return false;
        }else if(validarEmail(email.val()) == false){
            alert("Email invalido!");
            return false;
        }else if(!cpfcnpj){
            alert("Selecione uma da opções (CPF ou CNPJ)");
            return false;
        }
            return true;
    }

    var cpfcnpj = false;
    //Alterar campos em caso de cpf ou cnpj
    $(".cpf-cnpj").change(function () {
        cpfcnpj = true;
    });

    //Abilitar botão cadastrar caso termo de aceite estiver flegado;
    $("#in-termos").change(function () {
        var btnCadastrar = document.getElementById("btn-cadastar") || $("#btn-cadastrar");
        var check = $("#in-termos");

        if(check.is(":checked")){
            btnCadastrar.removeAttr("disabled");
        }else{
            btnCadastrar.prop("disabled", true);
        }

    });

    function validarfrm2() {
        var cel = $("#in-cel");
        var tel = $("#in-tel");

        if (tel.val().length < 10){
            alert("O número de telefone deve conter 10 dígitos");
            return false;
        }
        else if(cel.val().length < 11){
            alert("O número de celular deve conter 11 dígitos");
            return false;
        }
        return true;
    }

    function validarfrm3() {
        var cep = $("#in-cep");
        var num = $("#in-num");
        
        if(cep.val().lenght < 8){
            alert("O CEP deve conter 8 digitos!");
            return false;
        }
        else if(cepStatus == false){
            return false;
        }
        else if(num.val().lenght < 1){
            alert("Digite o número de correspondência!");
            return false;
        }

        return true;


    }
    
    $(".btn-avancar").click(function () {
        var margin = $("#dv-form-cadastrar").css("margin-left");
        var id = $(this).attr("id");
        margin = margin.substr(0, margin.indexOf("px"));
        margin = Number(margin)-360;

        switch (id){
            case "btn-continuar1":
                if (validarfrm1()){
                    $("#dv-form-cadastrar").css({"margin-left":""+margin+"px","transition":"0.5s","animation-timing-function":"ease-out"});
                }else {
                    alert("Preencha todos os dados corretamente!");
                }
                break;
            
            case "btn-continuar2":
                if (validarfrm2()){
                    $("#dv-form-cadastrar").css({"margin-left":""+margin+"px","transition":"0.5s","animation-timing-function":"ease-out"});
                }else {
                    alert("Preencha todos os dados corretamente!");
                }
                break;
            case "btn-continuar3":
                if (validarfrm3()){
                    $("#dv-form-cadastrar").css({"margin-left":""+margin+"px","transition":"0.5s","animation-timing-function":"ease-out"});
                }else {
                    alert("Preencha todos os dados corretamente!");
                }
                break;
        }


    });

    

    $(".btn-voltar").click(function () {
        var margin = $("#dv-form-cadastrar").css("margin-left");
        margin = margin.substr(0, margin.indexOf("px"));
        margin = Number(margin)+360;

        $("#dv-form-cadastrar").css({"margin-left":""+margin+"px","transition":"0.5s","animation-timing-function":"ease-out"});
    });

    
    $("#in-data").datepicker();


    /*Buscar CEP*/
    var cepStatus = false;

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#in-logradouro").val("");
        $("#in-bairro").val("");
        $("#in-cidade").val("");
        $("#in-uf").val("");

    }

    //Quando o campo cep perde o foco.
    $("#in-cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#in-logradouro").val("...");
                $("#in-bairro").val("...");
                $("#in-cidade").val("...");
                $("#in-uf").val("...");


                //Consulta o webservice viacep.com.br/
                $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#in-logradouro").val(dados.logradouro);
                        $("#in-bairro").val(dados.bairro);
                        $("#in-cidade").val(dados.localidade);
                        $("#in-uf").val(dados.uf);

                        cepStatus = true;
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                        cepStatus = false;
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
                cepStatus = false;
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
            cepStatus = false;
        }


    });


    /*1 Exibundo conteudo do login de adm superintendente*/

    $("#link-superintendencia").click(function () {
        $("#sec-login-sup").css("display","block");
    });

    $("#spn-fechar, #spn-box_login_sup-fechar").click(function () {
        $("#sec-login-sup").css("display","none");
    });

    /*2 Exibindo conteudo do Termo de uso*/
    $("#link-termos_uso").click(function () {
        $("#sec-termo").css("display","block");
    });

    $("#spn-termo-fechar, #spn-box_termos-fechar").click(function () {
        $("#sec-termo").css("display","none");
    });

    /*3 Exibindo conteudo de detalhes do veiculo*/
    $(".btn-detalhes").click(function () {
        $("#sec-det-veicluo").css("display","block");
    });

    $("#spn-det_veiculo-fechar, #spn-box_det_veiculo-fechar").click(function () {
        $("#sec-det-veicluo").css("display","none");
    });

    /*4 Exibindo conteudo de detalhes do anunciante*/
    /*$(".btn-detalhes").click(function () {
        $("#sec-det-veicluo").css("display","block");
    });

    $("#spn-det_veiculo-fechar, #spn-box_det_veiculo-fechar").click(function () {
        $("#sec-det-veicluo").css("display","none");
    });*/

    $(".in-entrar").focus(function () {
        $("#btn-continuar1").removeAttr('disabled');
    })

});