<link rel="stylesheet" href="view/css/style_login_modal.css">

<div id="dv-login-modal">
    <div id="dv-form-login">
        <h2>ENTRAR</h2>
        <form name="frm-entrar" method="post" action="router.php">
            <div class="in-campos">
                <div class="in-2-campos">
                    <label for="in-entrar-email">E-MAIL</label>
                    <input type="email" name="in-entrar-email" id="in-entrar-email" class="in-entrar" placeholder="E-mail">
                </div>
                <div class="in-2-campos">
                    <label for="in-entrar-senha">SENHA</label>
                    <input type="password" name="in-entrar-senha" id="in-entrar-senha" class="in-entrar" placeholder="Senha" minlength="8">
                </div>
            </div>
            <input type="submit" id="btn-entrar" name="btn-entrar" value="ENTRAR" class="in-entrar">
        </form>
    </div>
</div>