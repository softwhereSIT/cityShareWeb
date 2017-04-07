
    <link rel="stylesheet" href="css/style_addFuncionario.css"/>

        <div id="dv_titulo">
            <h1>Adicionar Funcionários</h1>
        </div>
         <form name="frm_cadastro_func" method="post" action="index.php?controller=funcionario&action=novoFuncionario">
            <div id="dv_cadastro">

                <div id="dv_tabela">

                    <div class="dv_texto">
                        <label for="in-nome" class="texto">
                            Nome
                        </label>
                    </div>
                    <div class="dv_input">
                        <input type="text" name="in-nome" class="input">
                    </div>

                    <div class="dv_texto">
                        <label for="in-rg" class="texto">
                            RG
                        </label>
                    </div>
                    <div class="dv_input">
                        <input type="text" name="in-rg" class="input">
                    </div>

                    <div class="dv_texto">
                        <label for="in-cfp" class="texto">
                            CPF
                        </label>
                    </div>
                    <div class="dv_input">
                        <input type="text" name="in-cpf" class="input">
                    </div>

                    <div class="dv_texto">
                        <label for="in-cargo" class="texto">
                            Cargo
                        </label>
                    </div>
                    <div class="dv_input">
                        <select name="in-cargo" class="input">
                            <option>Selecione o cargo</option>
                        </select>
                    </div>

                    <div class="dv_texto">
                        <label for="in-email" class="texto">
                            Email
                        </label>
                    </div>
                    <div class="dv_input">
                        <input type="text" name="in-email" >

                    </div>

                    <div class="dv_texto">
                        <label for="in-senha" class="texto">
                            Senha
                        </label>
                    </div>
                    
                    <div class="dv_input">
                        <input type="text" name="in-senha" >

                    </div>

                    <div class="dv_texto">
                        <label for="in-dtnasc" class="texto">
                            Data de nascimento
                        </label>
                    </div>
                    <div class="dv_input">
                        <input type="date" name="in-dtnasc" >

                    </div>

                    <div class="dv_texto">
                        <label for="in-dtadm" class="texto">
                            Data de Admissão
                        </label>
                    </div>
                    <div class="dv_input">
                        <input type="date"  name="in-dtadm" >
                    </div>

                    <div id="dv_botao">

                        <input type="submit"  name="in-enviar" id="btn_cadastrar">
                        
                    </div>
                </div>
            </div>
        </form>
    