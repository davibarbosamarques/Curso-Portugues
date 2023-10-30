<?php
include('layout/header.php');
 ?>
<body>

    <!-- NAV  -->
    <?php
    include('layout/nav.php');
    ?>
    <!-- FIM DA NAV -->

    <!-- menu lateral  -->
    <?php
    include('layout/menu.php');
    ?>

    <div class="all-conteudo">
        <section>
            <div class="main-content container-fluid">



                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <h2 class="Titulo fw-bolder">Apresentação</h2>
                        <!-- tirei o hr por que o menu não estava ficando sobreposto -->
                        <!-- <hr> -->


                        <p>Nesta aula, apresentaremos algumas técnicas de comunicação verbal e características de redação denominada “Oficial”. Além disso, você conhecerá as formas de tratamento utilizadas nesse tipo de redação e os cuidados a serem observados ao emprega-las em situações formais.
                        </p>

                        <h2 class="Titulo fw-bolder">Apresentação</h2>

                        <!-- lista  -->

                        <ul class="list">
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle text-success"></i>
                            Compreender a funcionalidade da redação oficial, seu espaço de circulação e seus objetivos;
                            </li>
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle text-success"></i>
                            Reconhecer as características e as particularidades da escrita oficial;
                            </li>
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle text-success"></i>
                            Utilizar adequadamente as formas de tratamento oficiais.
                            </li>
                        </ul>

                        <!-- fim da lista  -->


                        <ul class="none">
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i></i>
                                <h4>
                                    Olá, Nome_Completo bem-vindo ao módulo 01 do curso de Língua Portuguesa: Redação Oficial. Bons estudos!
                                </h4>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </section>


        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
                    class="bi bi-chevron-right"></i></a>
        </div>


        <div id="progress-bar"></div>
    </div>
<?php
include('layout/footer.php');
?>
</body>

</html>