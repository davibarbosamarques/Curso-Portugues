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
                                                        <li><i class="fa fa-arrow-right text-success"></i> A Lei Ordinária e a Lei Complementar;</li>
                                                        <li><i class="fa fa-arrow-right text-success"></i> A Medida Provisória;</li>
                                                        <li><i class="fa fa-arrow-right text-success"></i> O Decreto;</li>
                                                        <li><i class="fa fa-arrow-right text-success"></i> A Portaria;</li>
                                                        <li><i class="fa fa-arrow-right text-success"></i> entre outros.</li>
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
                                <li><i class="fa fa-cube text-success"></i> Correspondências; e</li>
                                <li><i class="fa fa-cube text-success"></i> Documentos;</li>
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

                            <div class="bd-callout bd-callout-success">
                                <p>"A Redação Oficial é utilizada pela Administração Direta, composta pelos serviços integrados na estrutura administrativa da Presidência da República e dos Ministérios, e pela Administração Indireta, composta por entidades dotadas de personalidade jurídica própria, como autarquias, empresas públicas, sociedades de economia mista e órgãos que compõem os poderes Legislativo e Judiciário."</p>
                                <p class="text-end">- FLÔRES, 2007, p. 27</p>
                            </div>

                            <!-- CAIXA DE TEXTO CURIOSIDADE -->
                            <section class="container">
                                <div class="accordion ">
                                <section id="content">
                                    <div class="caixaprincipal" id="tituloCuriosidade">
                                    <div class="div_teste">
                                        <div><i class="fa-solid fa-question"></i> CURIOSIDADE </div>

                                        <i id="icon-pointer" class="fa-regular fa-hand-pointer fa-beat"></i>
                                    </div>
                                    </div> <!--caixa Principal-->
                                    <div class="accordion-content" id="Curiosidade">
                                    <p class="txt-aviso"><strong class="opacity-75"><strong class="opacity-75">
                                            Passe o mouse acima
                                        </strong></strong></p>
                                    <p class="txt-caixasecundaria">A uniformidade e a padronização de correspondências relacionadas aos atos administrativos oficiais não eram características amplamente praticadas até pouco tempo atrás. Data de 11 de janeiro de 1991 o Decreto n. 100.000, em que o Presidente da República autorizou a criação de uma comissão para rever, atualizar, uniformizar e simplificar as normas de redação de atos e comunicações oficiais. Em outubro do mesmo ano, essa comissão apresentou a primeira edição do Manual de Redação da Presidência da República, que tinha o objetivo de racionalizar e padronizar os textos oficiais.
                                    </p>
                                    <p class="txt-caixasecundaria">Dez anos depois, fez-se necessário revisar e atualizar o texto do Manual, principalmente para adaptá-lo à evolução legislativa brasileira e para adequá-lo às formas de comunicação oficial e aos avanços da informática. Essa segunda edição revisada e atual do Manual está disponível, desde 2002, no sítio da Casa Civil. Conheça mais sobre o Manual, em: <a target="blank" href="https://www4.planalto.gov.br/centrodeestudos/assuntos/manual-de-redacao-da-presidencia-da-republica/manual-de-redacao.pdf">http://www4.planalto.gov.br/manual-de-redacao.pdf</a></p><!--caixa secundaria-->
                                    </div>
                                </section>
                            </section>
                            <!-- FIM DA CAIXA DE TEXTO CURIOSIDADE -->

                            <!-- subtopico -->
                            <h3 class="Subtopico fw-bolder">Características da Redação Oficial</h3>
                            <!-- subtopico -->

                            <p>Em nosso dia a dia, cada situação comunicativa específica possui sua linguagem característica, apropriada, que é determinada em função dos interlocutores envolvidos e do grau de formalidade exigido.</p>

                            <p>Exemplo, temos uma linguagem possível para bate-papos informais na internet, popularmente chamada de internetês, outra para bilhetinhos familiares ou cartas que expressam nossos sentimentos, e assim por diante.</p>

                            <p>Em situações comunicativas informais, espontâneas, costumamos fazer uso de uma fala/escrita descontraída, natural: usamos a linguagem popular ou coloquial que não necessariamente segue as regras gramaticais da norma-padrão da linguagem, mas sua própria norma, caracterizada pelos conhecidos vícios de linguagem, por aspectos considerados como desvios da gramática tradicional (gramática normativa), pelo uso de expressões idiomáticas, expressões grupais (gírias) ou expressões/construções de baixo prestígio social.</p>

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
                                    <p class="txt-caixasecundaria"><strong>No caso da redação oficial, qual modalidade de linguagem escrita deve ser utilizada?</strong></p>
                                    <p class="txt-caixasecundaria">Na redação oficial, a linguagem a ser utilizada é a formal. Essa modalidade de linguagem faz parte de um padrão linguístico bastante valorizado na esfera profissional, além de ser a modalidade de linguagem recomendada pelo Manual de Redação da Presidência da República para atos e comunicações oficiais.</p>
                                    
                                    <p class="txt-caixasecundaria"><strong>Mas, afinal, o que caracteriza a linguagem formal e por que ela é necessária?</strong></p>
                                    <p class="txt-caixasecundaria">O primeiro aspecto da linguagem formal está relacionado à norma padrão da língua. A variedade formal da linguagem é regida pela adequação às regras da gramática normativa, pois, desse modo, garante-se rigor quanto à forma. Em contrapartida, evitam-se textos obscuros, ambíguos, incompreensíveis por questões estruturais. Dentre as inadequações mais habituais nos textos, costumam ser frequentes aquelas relacionadas a questões de concordância e regência (nominal e verbal), de colocação de termos na oração (colocação pronominal), de acentuação, de pontuação e de uso equivocado de palavras com proximidades gráficas, mas com grandes distâncias semânticas (O significado das palavras, por oposição à sua forma) (a exemplo do caso de iminente/ eminente, ratificar/retificar, entre outras).</p><!--caixa secundaria-->
                                    </div>
                                </section>
                            </section>
                            <!-- FIM DA CAIXA SAIBA MAIS  -->

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
                                    <p class="txt-caixasecundaria">Em casos de dúvidas gramaticais, é importante consultar uma gramática normativa atualizada. Dentre outras obras, indicamos as seguintes:</p>

                                    <p class="txt-caixasecundaria"><i class="fa fa-book text-success"></i> <strong>Nova Gramática do Português Contemporâneo</strong>, de Celso Cunha e Luis F. Lindley Cintra – Editora Lexikon;</p>

                                    <p class="txt-caixasecundaria"><i class="fa fa-book text-success"></i> <strong>Aprender e Praticar Gramática</strong>, de Mauro Ferreira – Editora FDT. O autor expõe os conceitos gramaticais e os exemplifica amplamente. Cada capítulo é seguido de um esquema-síntese do conteúdo estudado e de uma bateria de exercícios; e</p>

                                    <p class="txt-caixasecundaria"><i class="fa fa-book text-success"></i> <strong>Moderna Gramática Portuguesa</strong>, de Evanildo Bechara. O autor apresenta uma sequência de estudo, didática e bem exemplificada, em que a análise prescritiva é abordada de maneira crítica.</p>
                                </ul></p>
                                    </div>
                                </section>
                            </section>
                            <!-- FIM DA CAIXA FIQUE ATENTO -->
                            <p>O segundo aspecto, relacionado ao emprego da linguagem formal, diz respeito à interdição quanto ao emprego de gírias e de expressões regionais, idiomáticas ou populares nos textos oficiais. Além de serem próprias de situações informais de comunicação, essas expressões podem dificultar ou mesmo inviabilizar a compreensão de uma mensagem. São marcas características da comunicação em ambientes familiares e formadoras de um discurso estritamente grupal ou pessoal, não oficial.</p>
                        
                            <p>A redação oficial exige que o usuário contemple o critério da uniformidade de sentido. Imagine como seria de difícil utilização para um órgão público um Regulamento que possibilitasse, para cada leitor, uma interpretação distinta das normas nele contidas. Além disso, se esse Regulamento apresentasse em seu texto gírias ou expressões regionais, poderia impossibilitar a compreensão para pessoas que as desconhecessem, enquanto estaria dando privilégio de compreensão aos integrantes do grupo usuário de tais expressões. Isso não estaria de acordo com o critério da uniformidade, que prevê condições de igualdade de leitura e compreensão do texto, sem distinções grupais.</p>

                            <p>Vale lembrar outra questão vocabular que pode prejudicar a compreensão do texto, já que compromete a clareza das informações e restringe a compreensão a determinados grupos: o uso de arcaísmos. Assim como as gírias e as expressões regionais, palavras em desuso são obstáculos para o entendimento das ideias veiculadas. Como são palavras ou expressões obsoletas, seu significado pode ser tão enigmático quanto o de uma gíria desconhecida.</p>

                            <p>A impessoalidade é o terceiro aspecto que caracteriza a linguagem formal. A preferência pela impessoalização de textos formais (técnicos, empresariais, oficiais) decorre, primeiramente, da necessidade de a ênfase dos documentos recair sobre as informações que eles contêm e não sobre quem os elabora; depois, de não se desejar marcar o autor dos textos como “dono” das ideias que estão sendo comunicadas por ele, o que poderia dar a elas pouco crédito, já que seriam avaliadas de uma posição pessoal e individualizada, e não institucional e coletiva, como deve ser.</p>

                            <p>Isso quer dizer que os documentos e as comunicações oficiais sempre são feitos em nome do Serviço Público, apesar de serem assinados, por exemplo, pela chefia de determinada Seção; além disso, o assunto tratado é, invariavelmente, de interesse público.</p>

                            <p>Proceder à impessoalização não é tarefa complexa. Há formas simples e usuais que servem para minimizar as marcas de pessoa do texto sem, contudo, apagar as marcas de autoria. Dentre as formas de se atingir a impessoalidade, estão:</p>

                            <!-- lista ordenada  -->
                            <ol type="a" class="scrool" id="txt_final">
                                <li>A preferência às estruturas passivas, com apagamento de agente:</li>

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
                                        <p class="txt-caixasecundaria">a. O Edital de Abertura n. 47/2007 foi publicado na última semana.
                                        <p>
                                        <p class="txt-caixasecundaria">b. Os gabaritos de provas foram divulgados.</p>
                                        </div>
                                    </section>
                                </section>
                                <!-- FIM DA CAIXA EXEMPLO-->
                                <li>O uso da primeira pessoa do plural com referenciação genérica:</li>

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
                                        <p class="txt-caixasecundaria">a. Publicamos o Edital de Abertura n. 47/2007 na última semana.
                                        <p>
                                        <p class="txt-caixasecundaria">b. Divulgamos os gabaritos de provas.</p>
                                        </div>
                                    </section>
                                </section>
                                <!-- FIM DA CAIXA EXEMPLO-->
                                <li>O uso de construções com verbo + se:</li>

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
                                        <p class="txt-caixasecundaria">a. Publicou-se o Edital de Abertura n. 47/2007 na última semana.
                                        <p>
                                        <p class="txt-caixasecundaria">b. Divulgaram-se os gabaritos de provas
                                        <p>
                                        </div>
                                    </section>
                                </section>
                                <!-- FIM DA CAIXA EXEMPLO-->
                            </ol>
                            <!-- fim da lista ordenada  -->
                            <!-- Botões de navegação -->
                            <div class="text-center">
                                <a href="topico01.php" class="btn btn-outline-success" role="button"
                                    aria-pressed="true">
                                    <i class="fa-solid fa-chevron-left"></i> Voltar </a>
                                <a href="topico03.php" class="btn btn-outline-success" role="button"
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