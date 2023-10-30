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
                                    <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75"> Passe o mouse acima
                                        </strong></strong></p>
                                    <p class="txt-caixasecundaria"><strong>O que é a redação oficial?</strong></p>
                                    <p class="txt-caixasecundaria">A redação oficial é aquela que trata da maneira pela qual o Poder Público redige <strong>atos normativos</strong> e comunicações oficiais.</p><!--caixa secundaria-->
                                    </div>
                                </section>
                            </section>
                            <!-- FIM DA CAIXA SAIBA MAIS  -->
                            <div class="text-center aviso">
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="bi bi-lightbulb-fill"></i> Clique nos títulos abaixo para mais informações</h6>
                            </div>

                            <div class="container">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Atos Normativos
                                </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body"><p>Podemos citar como exemplos de ato normativo:</p>
                                <!-- lista  -->
                                <ul class="list">
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle text-success"></i>
                                    A Lei Ordinária e a Lei Complementar;
                                    </li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle text-success"></i>
                                    A Medida Provisória;
                                    </li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle text-success"></i>
                                    O Decreto;
                                    </li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle text-success"></i>
                                    A Portaria;
                                    </li>
                                    <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle text-success"></i>
                                    entre outros.
                                    </li>
                                </ul>

                                <!-- fim da lista  -->
                            </div>
                                </div>
                            </div>
                            </div>
                            </div>

                            <p>De acordo com Flôres (2002, p. 11), os textos produzidos no âmbito da Redação Oficial podem ser agrupados em duas categorias:</p>
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