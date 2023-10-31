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

                            <!-- COMEÇO REFERÊNCIAS  -->

                            <h2 class="Titulo">A Redação Oficial</h2>
                            <br>

                            <p><strong>Objetivo:</strong> Conceituar e caracterizar a redação oficial.</p>

                            <!-- CAIXA DE TEXTO SAIBA-MAIS -->
                            <section class="container">
                                <div class="accordion ">
                                    <section id="content">
                                        <div class="caixaprincipal" id="tituloSaibaMais">
                                            <div class="div_teste">
                                                <div><i class="fa-solid fa-plus"></i> SAIBA MAIS </div>

                                                <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                            </div>
                                        </div> <!--caixa Principal-->
                                        <div class="accordion-content" id="saibamais">
                                            <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                                        Passe o mouse acima
                                                    </strong></strong></p>
                                            <p class="txt-caixasecundaria"><strong>O que é a redação oficial?</strong>
                                            </p>
                                            <p class="txt-caixasecundaria">A redação oficial é aquela que trata da
                                                maneira pela qual o Poder Público redige <strong>atos
                                                    normativos</strong> e comunicações oficiais.</p>
                                            <!--caixa secundaria-->
                                        </div>
                                    </section>
                            </section>
                            <!-- FIM DA CAIXA SAIBA MAIS  -->

                            <div class="container">
                                <div class="accordion accordion-flush" id="AccordionFase01">
                                    <div class="text-center aviso">
                                        <h6 class="fs-6 SmallCaps badge bg-warning"><i class="bi bi-lightbulb-fill"></i> Clique
                                        nos títulos abaixo para mais informações</h6>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                <strong>Atos Normativos</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <p>Podemos citar como exemplos de ato normativo:</p> 

                                                    <ul class="list">
                                                        <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A Lei Ordinária e a Lei Complementar;</li>
                                                        <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A Medida Provisória;</li>
                                                        <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O Decreto;</li>
                                                        <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A Portaria;</li>
                                                        <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> entre outros.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>De acordo com Flôres (2002, p. 11), os textos produzidos no âmbito da Redação Oficial
                                podem ser agrupados em duas categorias:</p>

                            <ul class="list">
                                <li><i class="fa fa-cube CorVerdeClaroEstado"></i> Correspondências; e</li>
                                <li><i class="fa fa-cube CorVerdeClaroEstado"></i> Documentos;</li>
                             </ul>

                            <p>Entretanto, apesar dessa segmentação, as correspondências e os documentos oficiais estão intimamente relacionados: Primeiro, porque esses textos possuem características em comum. Segundo, porque é de praxe que o encaminhamento de documentos seja acompanhado de correspondência.</p>

                            <p>Veja os tipos mais comuns de cada categoria:</p>
                            <div class="bd-callout bd-callout-warning">
                                <p>
                                <strong>Correspondências</strong>
                                <hr>
                                <p>
                                Ofício, memorando, requerimento, carta, fax, mensagem eletrônica, telegrama, entre outros.
                                </p>

                            </div>

                            <div class="bd-callout bd-callout-info">
                                <p>
                                <strong>Documentos</strong>
                                <hr>
                                <p>
                                Ata, certidão, portaria, procuração, relatório, instrução normativa, decreto etc.
                                </p>

                            </div>
                            <!-- CAIXA DE TEXTO IMPORTANTE -->
                            <section class="container">
                                <div class="accordion">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloimportante">
                                    <div class="div_teste">
                                        <div><i class="bi bi-exclamation-circle"></i> IMPORTANTE </div>
                                        <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                    </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="importante">
                                    <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                                    <p class="txt-caixasecundaria">Esses textos existem normas estabelecidas por decretos, portarias e instruções normativas federais que regulamentam sua feitura.</p> <!--caixa secundaria-->
                                    </div>
                                </section>
                                </div>
                            </section>
                            <!-- FIM DA CAIXA IMPORTANTE -->

                            <p>Além disso, como ressalta Flôres (2007, p. 26),</p>

                            <div class="bd-callout bd-callout-success">
                                <p>"O que eleva um documento à categoria de texto oficial é a finalidade para a qual foi gerado: tratar de assunto(s) do interesse do(s) signatário(s) (Aquele que assina ou subscreve um documento) ou do que ele(s) representa(m) junto ao(s) órgão(s) público(s)."</p>
                                <p class="text-end">- ENAP, 2006</p>
                            </div>

                            <!-- CAIXA DE TEXTO FIQUE-ATENTO -->
                            <section class="container">
                                <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="titulofiqueatento">
                                    <div class="div_teste">
                                        <div><i class="fa-solid fa-person-circle-exclamation"></i> FIQUE ATENTO </div>
                                        <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                    </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="fiqueatento"><!--caixa secundaria-->
                                    <p class="txt-aviso"><strong class="opacity-75"> Passe o mouse acima </strong></p>
                                    <p class="txt-caixasecundaria">Desde a publicação da Instrução Normativa n. 4, de 6 de março de 1992, pela extinta Secretaria da Administração Federal, que torna obrigatória a observância das regras constantes no Manual de Redação da Presidência da República, busca-se uniformizar e padronizar a redação dos textos oficiais por meio da atualização da linguagem neles empregada e da modernização das diversas modalidades de expedientes.</p>
                                    </div>
                                </section>
                            </section>
                            <!-- FIM DA CAIXA FIQUE ATENTO -->
                            <p>Conforme Flôres,</p>
                            <!-- Botões de navegação -->
                            <div class="text-center">
                                <a href="topico04.php" class="btn btn-outline-success" role="button"
                                    aria-pressed="true">
                                    <i class="fa-solid fa-chevron-left"></i> Voltar </a>
                                <a href="topico01.php" class="btn btn-outline-success" role="button"
                                    aria-pressed="true">Realizar a Atividade Avaliativa <i
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