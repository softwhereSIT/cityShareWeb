/**
 * Created by JGuilherme on 08/03/2017.
 */

$(document).ready(function(){
    /*1 Exibundo conteudo do login de adm superintendente*/

    $("#link-superintendencia").click(function () {
        $("#sec-login-sup").css("display","block");
    });

    $("#spn-fechar, #spn-box_login_sup-fechar").click(function () {
        $("#sec-login-sup").css("display","none");
    });

    
});