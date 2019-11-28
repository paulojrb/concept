<?php 

session_start();

$logging = false;
if ( isset($_SESSION["user-u"]) ) {
    $logging = true;
}
    


?>

<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/images/favicon.svg" type="image/svg" />
    <title>Concept - Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>

<body>
   <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
       <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="./">Concept</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item nav-user">
                            <a class="nav-link" href="#">Help</a>
                        </li>
                        <li class="nav-item nav-user">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <?php require_once('navbar.php'); ?>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <?php require_once('nav-left-sidebar.php'); ?>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                    <!-- pageheader -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                           <h2 class="pageheader-title">Escopo </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" aria-current="page">info</li>
                                      </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader -->
                    <!-- ============================================================== -->
                      <!-- ============================================================== -->
                    <!-- timeline  -->
                    <!-- ============================================================== -->
                
                    <section class="cd-timeline js-cd-timeline">
                        <div class="cd-timeline__container">
                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                                    
                                </div>
                                <!-- cd-timeline__img -->
                                <div class="cd-timeline__content js-cd-content">
                                    <h3>10 - Registro e monitorização insuficientes</h3>
                                    <p>O registo e monitorização insuficientes, em conjunto com uma resposta a incidentes inexistente ou
insuficiente permite que os atacantes possam abusar do sistema de forma persistente, que o possam
usar como entrada para atacar outros sistemas, e que possam alterar, extrair ou destruir dados. Alguns
dos estudos demonstram que o tempo necessário para detetar uma violação de dados é de mais de
200 dias e é tipicamente detetada por entidades externas ao invés de processos internos ou
monitorização. <a href="/concept-master/pages/login.php" target="_blank"><b><i>Link do desafio</b></i></a>
                                    </p>
                                    <span class="cd-timeline__date"></span>
                                </div>
                                <!-- cd-timeline__content -->
                            </div>
                            <!-- cd-timeline__block -->
                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--movie js-cd-img">
                                    
                                </div>
                                <!-- cd-timeline__img -->
                                <div class="cd-timeline__content js-cd-content">
                                    <h3>9 - Utilização de componentes vulneráveis</h3>
                                    <p>
                                        Componentes tais como, bibliotecas, frameworks e outros módulos de software, são executados com
                                        os mesmos privilégios que a aplicação. O abuso dum componente vulnerável pode conduzir a uma
                                        perda séria de dados ou controlo completo de um servidor. Aplicações e APIs que usem componentes
                                        com vulnerabilidades conhecidas podem enfraquecer as defesas da aplicação possibilitando ataques e
                                        impactos diversos. 
                                        <a href="/concept-master/user-info.php" target="_blank"><b><i>Link do desafio</b></i></a>
                                    </p>
                                 
                                    <span class="cd-timeline__date"></span>
                                </div>
                                <!-- cd-timeline__content -->
                            </div>
                            <!-- cd-timeline__block -->
                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                                    
                                </div>
                                <!-- cd-timeline__img -->
                                <div class="cd-timeline__content js-cd-content">
                                    <h3>8 - Desserialização insegura</h3>
                                    <p>Desserialização insegura normalmente leva à execução remota de código. Mesmo que isto não
                                            aconteça, pode ser usada para realizar ataques, incluindo ataques por repetição, injeção e elevação de
                                            privilégios.</p>

                                            <span class="cd-timeline__date"></span>
                                  
                                    
                                </div>
                                <!-- cd-timeline__content -->
                            </div>
                            <!-- cd-timeline__block -->
                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--location js-cd-img">
                                    
                                </div>
                                <!-- cd-timeline__img -->
                                <div class="cd-timeline__content js-cd-content">
                                    <h3>7 - Cross-Site Scripting (XSS)</h3>
                                    <p>
                                        As falhas de XSS ocorrem sempre que uma aplicação inclui dados não-confiáveis numa nova página
                                        web sem a validação ou filtragem apropriadas, ou quando atualiza uma página web existente com
                                        dados enviados por um utilizador através de uma API do browser que possa criar JavaScript. O XSS
                                        permite que atacantes possam executar scripts no browser da vítima, os quais podem raptar sessões
                                        do utilizador, descaraterizar sites web ou redirecionar o utilizador para sites maliciosos.
                                        <a href="/concept-master/influencer-finder.php" target="_blank"><b><i>Link do desafio</b></i></a>
                                    </p>
                                 
                                    <span class="cd-timeline__date"></span>
                                </div>
                                <!-- cd-timeline__content -->
                            </div>
                            <!-- cd-timeline__block -->
                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--location js-cd-img">
                                    
                                </div>
                                <!-- cd-timeline__img -->
                                <div class="cd-timeline__content js-cd-content">
                                    <h3>6 - Configurações de segurança incorretas</h3>
                                    <p>
                                        As más configurações de segurança são o aspeto mais observado nos dados recolhidos.
                                        Normalmente isto é consequência de configurações padrão inseguras, incompletas ou ad hoc,
                                        armazenamento na nuvem sem qualquer restrição de acesso, cabeçalhos HTTP mal configurados ou
                                        mensagens de erro com informações sensíveis. Não só todos os sistemas operativos, frameworks,
                                        bibliotecas de código e aplicações devem ser configurados de forma segura, como também devem ser
                                        atualizados e alvo de correções de segurança atempadamente.
                                        <a href="/concept-master/" target="_blank"><b><i>Link do desafio</b></i></a>
                                    </p>
                                 
                                   
                                    <span class="cd-timeline__date"></span>
                                </div>
                                <!-- cd-timeline__content -->
                            </div>
                            <!-- cd-timeline__block -->
                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--movie js-cd-img">
                                    
                                </div>
                                <!-- cd-timeline__img -->
                                <div class="cd-timeline__content js-cd-content">
                                    <h3>5 - Quebra de controle de acessos</h3>
                                    <p>

                                        As restrições sobre o que os utilizadores autenticados estão autorizados a fazer nem sempre são
                                        corretamente verificadas. Os atacantes podem abusar destas falhas para aceder a funcionalidades ou
                                        dados para os quais não têm autorização, tais como dados de outras contas de utilizador, visualizar
                                        ficheiros sensíveis, modificar os dados de outros utilizadores, alterar as permissões de acesso, entre
                                        outros.
                                        <a href="/concept-master/pages/login.php" target="_blank"><b><i>Link do desafio</b></i></a>
                                            
                                    </p>
                                    <span class="cd-timeline__date"></span>
                                </div>
                                <!-- cd-timeline__content -->
                            </div>
                            <!-- cd-timeline__block -->
                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--location js-cd-img">
                                    
                                </div>
                                <!-- cd-timeline__img -->
                                <div class="cd-timeline__content js-cd-content">
                                    <h3>4 - Entidades externas de XML (XXE)</h3>
                                    <p>
                                        Muitos processadores de XML mais antigos ou mal configurados avaliam referências a entidades
                                        externas dentro dos documentos XML. Estas entidades externas podem ser usadas para revelar
                                        ficheiros internos usando o processador de URI de ficheiros, partilhas internas de ficheiros, pesquisa
                                        de portas de comunicação internas, execução de código remoto e ataques de negação de serviço, tal
                                        como o ataque Billion Laughs.
                                    </p>
                                 
                                   
                                    <span class="cd-timeline__date"></span>
                                </div>
                                <!-- cd-timeline__content -->
                            </div>
                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--movie js-cd-img">
                                    
                                </div>
                                <!-- cd-timeline__img -->
                                <div class="cd-timeline__content js-cd-content">
                                    <h3>3 - Exposição de dados sensíveis</h3>
                                    <p>
                                        Muitas aplicações web e APIs não protegem de forma adequada dados sensíveis, tais como dados
                                        financeiros, de saúde ou dados de identificação pessoal (PII). Os atacantes podem roubar ou modificar
                                        estes dados mal protegidos para realizar fraudes com cartões de crédito, roubo de identidade, ou
                                        outros crimes. Os dados sensíveis necessitam de proteções de segurança extra como encriptação
                                        quando armazenados ou em trânsito, tal como precauções especiais quando trocadas com o
                                        navegador web.
                                        <a href="/concept-master/influencer-profile.php" target="_blank"><b><i>Link do desafio</b></i></a>
                                    </p>
                                 
                                    <span class="cd-timeline__date"></span>
                                </div>
                                <!-- cd-timeline__content -->
                            </div>
                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                                    
                                </div>
                                <!-- cd-timeline__img -->
                                <div class="cd-timeline__content js-cd-content">
                                    <h3>2 - Quebra de autenticação</h3>
                                    <p>
                                        As funções da aplicação que estão relacionadas com a autenticação e gestão de sessões são
                                        muitas vezes implementadas incorretamente, permitindo que um atacante possa comprometer
                                        passwords, chaves, tokens de sessão, ou abusar doutras falhas da implementação que lhe
                                        permitam assumir a identidade de outros utilizadores (temporária ou permanentemente).
                                        <a href="/concept-master/pages/inbox.php" target="_blank"><b><i>Link do desafio</b></i></a>
                                    </p>
                                    
                                    <span class="cd-timeline__date"></span>
                                </div>
                                <!-- cd-timeline__content -->
                            </div>
                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--movie js-cd-img">
                                    
                                </div>
                                <!-- cd-timeline__img -->
                                <div class="cd-timeline__content js-cd-content">
                                    <h3>1 - Injeção</h3>
                                    <p>
                                        Falhas de injeção, tais como injeções de SQL, OS e LDAP ocorrem quando dados nãoconfiáveis são enviados para um interpretador como parte de um comando ou consulta legítima.
                                        Os dados hostis do atacante podem enganar o interpretador levando-o a executar comandos
                                        não pretendidos ou a aceder a dados sem a devida autorização.
                                        <a href="/concept-master/pages/message-chat.php" target="_blank"><b><i>Link do desafio</b></i></a>

                                    </p>
                                 
                                    <span class="cd-timeline__date"></span>
                                </div>
                                <!-- cd-timeline__content -->
                            </div>
                        </div>
                    </section>
                    <!-- cd-timeline -->
               
                    <!-- ============================================================== -->
                    <!-- end timeline  -->
                    <!-- ============================================================== -->
            </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->
        </div>
      
    </div>
   <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="assets/vendor/timeline/js/main.js"></script>
</body>

 
</html>