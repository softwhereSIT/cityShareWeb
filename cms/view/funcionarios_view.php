<link rel="stylesheet" href="css/style_funcionarios.css"/>
    
        <div id="dv_titulo">
            <h1> Funcionários </h1>
        </div>
        <form name="frm_registros_func" method="post" action="funcionarios_view.php">
            <div id="dv_registros">

                <div class="dv_busca">
                    <label for="in-busca" class="busca_texto"> Busca por: </label>
                </div>

                <div class="dv_input">
                    <input type="text" name="in-busca" class="busca" />
                </div>
                
                <div class="dv_botao">
                    <a href="addfuncionario_view.php"> <a href="index.php?controller=funcionario&action=add_funcionario" title="Adicionar Funcionario"><img id="img-btn-add-funcionario" src="img/Plus%202%20Math%20Filled-50.png" alt="Adicionar Funcionários"> <a/>
                </div>
                
                <div id="dv_tabela">
                    <table id="tabela-funcionarios">
                        <caption>Lista de Funcionários</caption>
                        <thead>
                        <tr class="td-funcionario">
                            <th>Nome:</th>
                            <th>RG:</th>
                            <th>CPF:</th>
                            <th>Nascimento:</th>
                            <th>Admissão:</th>
                            <th>Cargo:</th>
                            <th>Email:</th>
                            <th>Senha:</th>
                            <th>Opcões</th>
                        </tr>
                        </thead>
                        <tbody>

                            <?php
                            require_once ("../model/funcionario_class.php");
                                $listafuncionarios = new Funcionario();
                                $lista = $listafuncionarios->listarFuncionario();
                                $arrayFuncionarios = array($listafuncionarios);
                                //$cada = each($lista);
                                //var_dump($lista[0]);
                                //echo $lista[0][1];
                                //print_r($listafuncionarios->listarFuncionario());
                                //print_r($listafuncionarios->getNomeFunc());

                                print_r(count($lista));
                                //print_r($arrayFuncionarios[0]);
                                var_dump($arrayFuncionarios);

                                for($i=0; $i<sizeof($lista); $i++){

                                ?>
                            <tr class="td-funcionario">
                                <td><?php print_r($arrayFuncionarios[0]->getNomeFunc());?></td>
                                <td><?php print_r($listafuncionarios->getRg())?></td>
                                <td><?php print_r($listafuncionarios->getCpf())?></td>
                                <td><?php print_r($listafuncionarios->getDataNascimento())?></td>
                                <td><?php print_r($listafuncionarios->getDataAdmissao())?></td>
                                <td><?php print_r($listafuncionarios->getIdCargos())?></td>
                                <td><?php print_r($listafuncionarios->getEmail())?></td>
                                <td><?php print_r($listafuncionarios->getSenha())?></td>
                                <td><a href="index.php?controller=funcionario&action=editarFuncionario&id=<?php print_r($listafuncionarios->getIdFuncionario());?>">Editar</a> <a href="index.php?controller=funcionario&action=removerFuncionario&id=<?php print_r($listafuncionarios->getIdFuncionario());?>">Excluir</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </form>

