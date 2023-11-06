<!DOCTYPE html>
<html lang="pt-br">
<?php
include('layout/header.php');
?>

<body>
    <!-- COMEÇO DA NAV  -->
    <?php
    include('layout/nav.php');
    ?>
    <!-- FIM DA NAV  -->

    <!-- COMEÇO DO MENU  -->
    <?php
    include('layout/menu.php');
    ?>
    <!-- FIM DO MENU  -->

    <!-- CONTEUDO INICIO -->
    <div class="all-conteudo">
        <section>
            <div class="main-content container-fluid">
                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <div class="page-title">

                            <!-- COMEÇO TOPICO-03  -->

                            <h2 class="Titulo">Pronomes de Tratamento</h2>
                            <br>

                            <p><strong>Objetivo:</strong> Apresentar os pronomes que contribuem para a formalidade de tratamento na redação oficial.</p>

                            <p>Conforme apontam Ferreira e Cambrussi (2008), além das exigências de impessoalidade, clareza, concisão, objetividade e uso do nível culto da linguagem,<strong>a padronização da escrita oficial se constitui também através de certa formalidade de tratamento.</strong></p>

                            <p>A adequação do pronome de tratamento e do vocativo ao receptor da correspondência oficial está relacionada à uniformidade, à polidez e à civilidade necessárias para tratar os assuntos dos quais cuidam as comunicações.</p>

                            <p>Para essa adequação, é preciso considerar que o cargo ou a função ocupada pelo destinatário da correspondência irá determinar dois elementos empregados: o pronome de tratamento e o vocativo. Este último cumpre função apelativa de segunda pessoa, pois, por seu intermédio, chamamos ou colocamos em evidência a pessoa a quem nos dirigimos.</p>

                            <p>Veja o uso do vocativo “Senhor” e do pronome de tratamento adequado para o cargo de Deputado:</p>

                            <!--CAIXA DE TEXTO EXEMPLO-->
                            <section class="container">
                                <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloexemplo">
                                    <div class="div_teste">
                                        <div><i class="fa-regular fa-pen-to-square"></i></i> EXEMPLO </div>
                                        <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                    </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="exemplo"><!--caixa secundaria-->
                                    <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                                    <p class="txt-caixasecundaria">a. Senhor Deputado, Vossa Excelência está determinado a cumprir o que disse?
                                    <p>
                                    <p class="txt-caixasecundaria">b. Senhor Deputado, o que Vossa Excelência irá fazer para eliminar a corrupção presente na Assembleia Legislativa?</p>
                                    </div>
                                </section>
                            </section>
                            <!-- FIM DA CAIXA EXEMPLO-->
                            <p class="scrool">Apresentamos, no Quadro 1, as formas de tratamento e de endereçamento prescritas pelo Manual de Redação da Câmara dos Deputados (BRASIL, 2004):</p>

                        <!-- tabela modelo -->
                        <table class="table">
                            <thead>
                                <tr class="Thteste">
                                    <th scope="col">Autoridade</th>
                                    <th scope="col">Endereçamento</th>
                                    <th scope="col">Vocativo</th>
                                    <th scope="col">Tratamento no corpo do texto</th>
                                    <th scope="col">Abreviatura</th>
                                </tr>
                                </tr>
                            </thead>
                            <tbody class="Tdborda">
                                <tr>
                                    <td>Presidente da República</td>
                                    <td>A Sua Excelência o Senhor</td>
                                    <td>Excelentíssimo Senhor Presidente da República</td>
                                    <td>Vossa Excelência</td>
                                    <td>Não se usa</td>
                                </tr>
                                <tr>
                                    <td>Presidente do Congresso Nacional</td>
                                    <td>A Sua Excelência o Senhor</td>
                                    <td>Excelentíssimo Senhor Presidente do Congresso Nacional,</td>
                                    <td>Vossa Excelência</td>
                                    <td>Não se usa</td>
                                </tr>
                                <tr>
                                    <td>Presidente do Supremo Tribunal Federal</td>
                                    <td>A Sua Excelência o Senhor</td>
                                    <td>Excelentíssimo Senhor Presidente do Supremo Tribunal Federal,</td>
                                    <td>Vossa Excelência</td>
                                    <td>Não se usa</td>
                                </tr>
                                <tr>
                                    <td>Vice-Presidente da República</td>
                                    <td>A Sua Excelência o Senhor</td>
                                    <td>Senhor Vice-Presidente da República,</td>
                                    <td>Vossa Excelência</td>
                                    <td>V. Exa.</td>
                                </tr>
                                <tr>
                                    <td>Ministro de Estado</td>
                                    <td>A Sua Excelência o Senhor</td>
                                    <td>Senhor Ministro,</td>
                                    <td>Vossa Excelência</td>
                                    <td>V. Exa.</td>
                                </tr>
                                <tr>
                                    <td>Embaixador</td>
                                    <td>A Sua Excelência o Senhor</td>
                                    <td>Senhor Embaixador,</td>
                                    <td>Vossa Excelência</td>
                                    <td>V. Exa</td>
                                </tr>
                                <tr>
                                    <td>Oficial-General das Forças Armadas</td>
                                    <td>A Sua Excelência o Senhor</td>
                                    <td>Senhor + Posto,</td>
                                    <td>Vossa Excelência</td>
                                    <td>V. Exa</td>
                                </tr>
                                <tr>
                                    <td>Outros postos militares</td>
                                    <td>Ao Senhor</td>
                                    <td>Senhor + Posto,</td>
                                    <td>Vossa Excelência</td>
                                    <td>V. Exa</td>
                                </tr>
                                <tr>
                                    <td>Senador da República</td>
                                    <td>A Sua Excelência o Senhor</td>
                                    <td>Senhor Senador,</td>
                                    <td>Vossa Excelência</td>
                                    <td>V. Exa</td>
                                </tr>
                                <tr>
                                    <td>Deputado Federal</td>
                                    <td>A Sua Excelência o Senhor</td>
                                    <td>Senhor Deputado,</td>
                                    <td>Vossa Excelência</td>
                                    <td>V. Exa</td>
                                </tr>
                                <tr>
                                    <td>Ministro do Tribunal de Contas da União</td>
                                    <td>A Sua Excelência o Senhor</td>
                                    <td>Senhor Ministro do Tribunal de Contas da União,</td>
                                    <td>Vossa Excelência</td>
                                    <td>V. Exa</td>
                                </tr>
                                <tr>
                                    <td>Ministro dos Tribunais Superiores</td>
                                    <td>A Sua Excelência o Senhor</td>
                                    <td>Senhor Ministro,</td>
                                    <td>Vossa Excelência</td>
                                    <td>V. Exa</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <!-- Fim Tabela Modelo -->
                        <p id="FonteFigura"><strong>Quadro 1: </strong> Formas de tratamento <br /> <strong>Fonte:</strong> Adaptado de Brasil (2019, p. 05)</p>

                        <p>O emprego dos pronomes de tratamento requer alguns cuidados (FLÔRES, 2002, p. 16-17):</p>

                        <p><i class="fa fa-arrow-right text-success"></i> Usamos o possessivo <strong>Vossa</strong> para compor o pronome de tratamento quando se fala diretamente com a pessoa ou se escreve diretamente a ela:</p>

                        <!--CAIXA DE TEXTO EXEMPLO-->
                        <section class="container">
                            <div class="accordion ">
                            <section id="content">
                                <div class="caixaprincipal" id="tituloexemplo">
                                <div class="div_teste">
                                    <div><i class="fa-regular fa-pen-to-square"></i></i> EXEMPLO </div>
                                    <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                </div>
                                </div> <!--caixa Principal-->
                                <div class="accordion-content" id="exemplo"><!--caixa secundaria-->
                                <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                                <p class="txt-caixasecundaria"><strong>Vossa </strong>Excelência está no fim do mandato.
                                <p>
                                </div>
                            </section>
                        </section>
                        <!-- FIM DA CAIXA EXEMPLO-->

                        <p><i class="fa fa-arrow-right text-success"></i>  Empregamos o possessivo <strong>Sua</strong> para nos referirmos “a uma pessoa ausente do contexto de fala, ou quando se menciona uma autoridade no texto oral ou escrito, dirigido a outrem”:</p>
                        
                        <!--CAIXA DE TEXTO EXEMPLO-->
                        <section class="container">
                            <div class="accordion ">
                            <section id="content">
                                <div class="caixaprincipal" id="tituloexemplo">
                                <div class="div_teste">
                                    <div><i class="fa-regular fa-pen-to-square"></i></i> EXEMPLO </div>
                                    <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                </div>
                                </div> <!--caixa Principal-->
                                <div class="accordion-content" id="exemplo"><!--caixa secundaria-->
                                <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                                <p class="txt-caixasecundaria">Informo Vossa Excelência de que as medidas mencionadas em sua carta n. 6708, dirigida a <strong>Sua Excelência o Senhor Vice-Presidente da República, estão amparadas por lei.</strong>
                                <p>
                                </div>
                            </section>
                        </section>
                        <!-- FIM DA CAIXA EXEMPLO-->

                        <p><i class="fa fa-arrow-right text-success"></i> Informo Vossa Excelência de que as medidas mencionadas em sua carta n. 6708, dirigida a <strong>Sua Excelência o Senhor Vice-Presidente da República, estão amparadas por lei.</strong></p>
                        
                        <!--CAIXA DE TEXTO EXEMPLO-->
                        <section class="container">
                            <div class="accordion ">
                            <section id="content">
                                <div class="caixaprincipal" id="tituloexemplo">
                                <div class="div_teste">
                                    <div><i class="fa-regular fa-pen-to-square"></i></i> EXEMPLO </div>
                                    <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                </div>
                                </div> <!--caixa Principal-->
                                <div class="accordion-content" id="exemplo"><!--caixa secundaria-->
                                <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                                <p class="txt-caixasecundaria">Vossa Senhoria <strong>abriu</strong> o processo? (e não abriste).
                                <p>
                                </div>
                            </section>
                        </section>
                        <!-- FIM DA CAIXA EXEMPLO-->

                        <p><i class="fa fa-arrow-right text-success"></i>  Os pronomes possessivos são de terceira pessoa (seu, sua, seus, suas):</p>
                        
                        <!--CAIXA DE TEXTO EXEMPLO-->
                        <section class="container">
                            <div class="accordion ">
                            <section id="content">
                                <div class="caixaprincipal" id="tituloexemplo">
                                <div class="div_teste">
                                    <div><i class="fa-regular fa-pen-to-square"></i></i> EXEMPLO </div>
                                    <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                </div>
                                </div> <!--caixa Principal-->
                                <div class="accordion-content" id="exemplo"><!--caixa secundaria-->
                                <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                                <p class="txt-caixasecundaria">Vossa Excelência conversou com <strong>seus</strong> assessores? (e não vossos).
                                <p>
                                </div>
                            </section>
                        </section>
                        <!-- FIM DA CAIXA EXEMPLO-->

                        <p><i class="fa fa-arrow-right text-success"></i>  Os pronomes oblíquos são de terceira pessoa (o, a, os, as, lhe, lhes, se, si):</p>
                        
                        <!--CAIXA DE TEXTO EXEMPLO-->
                        <section class="container">
                            <div class="accordion ">
                            <section id="content">
                                <div class="caixaprincipal" id="tituloexemplo">
                                <div class="div_teste">
                                    <div><i class="fa-regular fa-pen-to-square"></i></i> EXEMPLO </div>
                                    <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                </div>
                                </div> <!--caixa Principal-->
                                <div class="accordion-content" id="exemplo"><!--caixa secundaria-->
                                <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                                <p class="txt-caixasecundaria">Magnífico Reitor, a ocupação da Reitoria não <strong>lhe</strong> preocupa demasiadamente? (e não vos).
                                <p>
                                </div>
                            </section>
                        </section>
                        <!-- FIM DA CAIXA EXEMPLO-->

                        <p><i class="fa fa-arrow-right text-success"></i>  O pronome oblíquo <strong>consigo</strong> só é usado quando se faz referência a um <strong>sujeito da terceira pessoa</strong>:</p>
                        
                        <!--CAIXA DE TEXTO EXEMPLO-->
                        <section class="container">
                            <div class="accordion ">
                            <section id="content">
                                <div class="caixaprincipal" id="tituloexemplo">
                                <div class="div_teste">
                                    <div><i class="fa-regular fa-pen-to-square"></i></i> EXEMPLO </div>
                                    <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                </div>
                                </div> <!--caixa Principal-->
                                <div class="accordion-content" id="exemplo"><!--caixa secundaria-->
                                <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                                <p class="txt-caixasecundaria">O Ministro trouxe <strong>consigo</strong> o projeto de restauração das rodovias. (e não convosco).
                                <p>
                                </div>
                            </section>
                        </section>
                        <!-- FIM DA CAIXA EXEMPLO-->

                        <p><i class="fa fa-arrow-right text-success"></i> Quando se fala diretamente com a pessoa, dizemos <strong>com o Senhor</strong>:</p>
                        
                        <!--CAIXA DE TEXTO EXEMPLO-->
                        <section class="container">
                            <div class="accordion ">
                            <section id="content">
                                <div class="caixaprincipal" id="tituloexemplo">
                                <div class="div_teste">
                                    <div><i class="fa-regular fa-pen-to-square"></i></i> EXEMPLO </div>
                                    <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                </div>
                                </div> <!--caixa Principal-->
                                <div class="accordion-content" id="exemplo"><!--caixa secundaria-->
                                <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                                <p class="txt-caixasecundaria">Vossa Excelência trouxe <strong>com o Senhor</strong> o projeto? (e não consigo).
                                <p>
                                </div>
                            </section>
                        </section>
                        <!-- FIM DA CAIXA EXEMPLO-->

                        <p><i class="fa fa-arrow-right text-success"></i>  Fazemos a concordância de gênero com base no sexo da pessoa a quem é dirigido o texto: </p>
                        
                        <!--CAIXA DE TEXTO EXEMPLO-->
                        <section class="container">
                            <div class="accordion ">
                            <section id="content">
                                <div class="caixaprincipal" id="tituloexemplo">
                                <div class="div_teste">
                                    <div><i class="fa-regular fa-pen-to-square"></i></i> EXEMPLO </div>
                                    <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                </div>
                                </div> <!--caixa Principal-->
                                <div class="accordion-content" id="exemplo"><!--caixa secundaria-->
                                <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                                <p class="txt-caixasecundaria">Vossa Senhoria será recepcionada no aeroporto (para mulher).
                                <p>
                                <p class="txt-caixasecundaria">Vossa Senhoria será recepcionado no aeroporto (para homem).</p>
                                </div>
                            </section>
                        </section>
                        <!-- FIM DA CAIXA EXEMPLO-->

                        <p><i class="fa fa-arrow-right text-success"></i>   Quem escreve pode se posicionar de duas maneiras:</p>

                        <ul class="list">
                            <li><i class="fa fa-cube text-success"></i> Utilizando a 1ª pessoa do singular, para entidade individual:</li>
                        </ul>

                        <!--CAIXA DE TEXTO EXEMPLO-->
                        <section class="container">
                            <div class="accordion ">
                            <section id="content">
                                <div class="caixaprincipal" id="tituloexemplo">
                                <div class="div_teste">
                                    <div><i class="fa-regular fa-pen-to-square"></i></i> EXEMPLO </div>
                                    <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                </div>
                                </div> <!--caixa Principal-->
                                <div class="accordion-content" id="exemplo"><!--caixa secundaria-->
                                <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                                <p class="txt-caixasecundaria"><strong>Informo</strong> a Vossa Senhoria que sua correspondência foi recebida.
                                <p>
                                </div>
                            </section>
                        </section>
                        <!-- FIM DA CAIXA EXEMPLO-->
                        <ul class="list">
                            <li><i class="fa fa-cube text-success"></i> Utilizando a 1ª pessoa do plural, para entidade coletiva:</li>
                        </ul>

                        <!--CAIXA DE TEXTO EXEMPLO-->
                        <section class="container">
                            <div class="accordion ">
                            <section id="content">
                                <div class="caixaprincipal" id="tituloexemplo">
                                <div class="div_teste">
                                    <div><i class="fa-regular fa-pen-to-square"></i></i> EXEMPLO </div>
                                    <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                </div>
                                </div> <!--caixa Principal-->
                                <div class="accordion-content" id="exemplo"><!--caixa secundaria-->
                                <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                                <p class="txt-caixasecundaria"><strong>Informamos</strong> a Vossa Senhoria que sua correspondência foi recebida.
                                <p>
                                </div>
                            </section>
                        </section>
                        <!-- FIM DA CAIXA EXEMPLO-->

                        <p>Conforme o Manual de Redação, para os casos em que é permitido o uso das abreviaturas para as formas de tratamento, não há necessidade de formatação com o sobrescrito (em fonte menor, com ponto ou barra embaixo). O motivo dessa mudança é proveniente da dificuldade que existe, na maioria dos atuais processadores de texto (como o Word), de formatar fontes sobrescritas. Portanto, em lugar de V.Exa. e V.Sa., por exemplo, podem ser utilizadas as formas V.Exa. e V.Sa., mostradas no Quadro 1.</p>

                        <div class="container">
                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <div class="text-center aviso">
                                    <h6 class="fs-6 SmallCaps badge bg-warning"><i class="bi bi-lightbulb-fill"></i> Clique
                                    nos títulos abaixo para mais informações</h6>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Manual de Redação</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <p>O Manual de redação da Presidência da República é omisso em relação ao uso de abreviaturas para as formas de tratamento. Mesmo nas comunicações e nos documentos que são uti lizados como modelos pelo Manual, nota-se que o pronome de tratamento não é abreviado</p> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <p>A Instrução Normativa n. 4, de 6 de março de 1992, determina que, para as autoridades apresentadas no Quadro 1, não devem ser utilizados os tratamentos:</p>

                            <!-- lista  -->
                            <ul class="list">
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle text-success"></i> <strong>Digníssimo</strong>
                                 (abreviatura: <strong>DD</strong>.), porque “a dignidade é pressuposto para que se ocupe qualquer cargo público, sendo desnecessária sua repetida evocação”;
                                </li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle text-success"></i> <strong>Ilustríssimo</strong>
                                 (abreviatura: <strong>Ilmo</strong>.), porque os tratamentos Senhor e Vossa Senhoria são suficientes para conferir a formalidade adequada; e
                                </li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle text-success"></i> <strong>Doutor</strong>
                                 (abreviatura: <strong>Dr</strong>.), porque esta não é uma forma de tratamento. Trata-se de título acadêmico, e não deve ser usado indiscriminadamente, mas apenas para as pessoas que tenham concluído curso universitário de pós-graduação em nível de doutorado.
                                </li>
                            </ul>
                            <!-- fim da lista  -->
                            <p>O pronome de tratamento Vossa Senhoria (V.Sa.) e o vocativo Senhor são muito utilizados nas correspondências e nos documentos oficiais e empresariais, por serem dirigidos também a particulares (pessoa física).</p>

                            <p>Convidamos você a conhecer, nas aulas 2 e 3, as principais modalidades de texto que compõem a Redação Oficial.</p>
                            
                            <p>Venha conosco!</p>
                            <!-- Botões de navegação -->
                            <div class="text-center">
                                <a href="topico02.php" class="btn btn-outline-success" role="button"
                                    aria-pressed="true">
                                    <i class="fa-solid fa-chevron-left"></i> Voltar </a>
                                <a href="referencias.php" class="btn btn-outline-success" role="button"
                                    aria-pressed="true">Próximo<i
                                        class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- COMEÇO DO FOOTER  -->
    <?php
    include('layout/footer.php');
    ?>
    <!-- FIM DO FOOTER  -->
</body>

</html>