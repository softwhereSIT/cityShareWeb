<link rel="stylesheet" href="view/css/style_fale_conosco.css">


<!-- Area principal de conteúdo do site-->
<main role="main" id="main_fale_conosco">
    <!-- Menu de categoria localizado na lateral esquerda do conteudo principal-->
    <section id="sec_cadastro">
            <form name="frm_fale_conosco" method="" action="">

                <div id="dv_titulo">
                    <h2>FALE CONOSCO</h2>
                </div>

                <div class="dv_texto" >
                    <label for="in-nome" class="letra"> <p > NOME </p> </label>
                </div>
                <div id="dv_input">
                        <input type="text" name="in-nome" id="in-nome" value=""/>
                </div>

                <div class="dv_email_whats" >
                    <div class="dv_contato">
                        <label for="in-email"> <p class="letra">E-MAIL </p></label>
                    </div>
                    
                    <div class="dv_contato">
                        <label for="in-whats"> <p class="letra"> WHATSAPP </p></label>
                    </div>
                </div>

                <div class="dv_email_whats" >
                    <div class="dv_contato_input">
                        <input type="text" name="in-email" id="in-email" value=""/>
                    </div>
                    <div class="dv_contato_input">
                        <input type="text" name="in-whatsapp" id="in-whats" value=""/>
                    </div>

                </div>
                
                <div class="dv_texto" >
                   <label for="in-mensagem"> <p class="letra"> MENSAGEM </p> </label>
                </div>
                
                <div id="dv_line_radio">

                    <div class="dv_radio">
                        <input type="radio" name="in-rdo_sugestao" value="" class="in-sugestao">
                            <label for="in-sugestao" class="in-sug">
                                Sugestão
                            </label>
                    </div>
                    <div class="dv_radio">
                        <input type="radio" name="in-rdo_elogio" value="" class="in-sugestao">
                            <label for="in-sugestao" class="in-sug">
                               Elogio
                            </label>
                    </div>
                    <div class="dv_radio">
                        <input type="radio" name="in-rdo_critica"  value="" class="in-sugestao">
                            <label for="in-sugestao" class="in-sug">
                                Crítica 
                            </label>
                    </div>
                    <div class="dv_radio">
                        <input type="radio" name="in-rdo_duvida"  value="" class="in-sugestao">
                            <label for="in-sugestao" class="in-sug">
                                Dúvida 
                            </label>
                    </div>

                </div>
                
                <div id="dv_sugestao">
                        <textarea name="in-sugestao" id="in-textarea" value="" style="resize: none"> </textarea>
                </div>
                <div id="dv_button">
                    <input type="submit" name="in-btn_enviar" id="in-enviar" value="ENVIAR"/>
                </div>
            </form>
    </section>
</main>
