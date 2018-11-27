<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">DACOM</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">Ouvidoria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Atividades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#news">Notícias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
                    <strong>Diretório Acadêmico de Comunicação</strong>
                </h1>
                <hr>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">Somos uma entidade política de representação estudantil, isso significa que somos responsáveis por defender
                    os interesses das e dos estudantes de comunicação junto à faculdade e outras instâncias.</p>
            </div>
        </div>
    </div>
</header>

<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">Fala com a gente!</h2>
                <hr class="light my-4">
                <p class="text-faded mb-4">Como você sabe, o Dacom está aqui para te ouvir e te ajudar no que for preciso. Para isso, abrimos uma ouvidoria
                    para que você envie quaisquer dúvidas, sugestões, elogios ou denúncias. Para obter uma resposta direta,
                    inclua seu e-mail que responderemos para ele – mas se preferir, pode deixar seu comentário de forma anônima,
                    e procuraremos outras formas de solucioná-lo.</p>
                <button type="button" class="btn btn-light btn-xl js-scroll-trigger" data-toggle="modal" data-target="#talkAbout">Fala Aí</button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="talkAbout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <img src='assets/img/ouvidoria.png' alt='Uni' />
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="home" method="POST">
                        <div class="form-group" style="display: none" id="emailDiv">
                            <label class="form-control-label">Email para resposta</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Mensagem</label>
                            <textarea class="form-control" name="content"></textarea>
                        </div>
                        <div class="form-group" id="anomDiv">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="identification">
                                <label class="form-check-label" for="iddentification">Anônimato</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Atividades do Dacom</h2>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-edit text-primary mb-3 sr-icons"></i>
                    <h3 class="mb-3">Cursos Acessíveis</h3>
                    <p class="text-muted mb-0">Oficinas práticas por um preço bem reduzido pra ti ficar por dentro do que acontece no mercado.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-comments text-primary mb-3 sr-icons"></i>
                    <h3 class="mb-3">SAC</h3>
                    <p class="text-muted mb-0">A Semana Acadêmica de Comunicação traz oficinas, palestras, visitas e muito mais, numa semana sem aula
                        e com preço justo.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-autoF">
                    <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
                    <h3 class="mb-3">Projetos Sociais</h3>
                    <p class="text-muted mb-0">Promovemos projetos de cunho social, como a isenção PRAE, semana das minas e concurso de reportagem,
                        e muito mais.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-address-card text-primary mb-3 sr-icons"></i>
                    <h3 class="mb-3">Cartão Tri</h3>
                    <p class="text-muted mb-0">Encaminhamos 1º e 2º via e renovação por um precinho bem mais acessível.</p>
                    <a href="mailto:your-email@your-domain.com">Clique aqui</a> e saiba mais!
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark text-white" id="news">
    <?php if (count($table) > 2) : ?>
    <div class="container text-center">
        <h2 class="mb-4">Últimas Novidades</h2>
    </div>
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <?php foreach ($table as $new) : ?>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="<?php echo $new['facebook_event'] ?>">
                    <img class="img-fluid" src="<?php echo base_url() ?>uploads/news/<?php echo $new['image'] ?>" alt="title">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-name">
                                <?php echo $new['title'] ?>
                                <p>
                                    <small class="text-muted"><?php echo $new['content'] ?></small>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    <?php endif ?>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading">Contatos</h2>
                <hr class="my-4">
                <p class="mb-5">Além da ouvidoria e do blog, você pode entrar em contato com a gente e acompanhar nosso trabalho através
                    de:
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center">
                <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
                <p>(51) 3308-5168</p>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
                <p>
                    <a href="mailto:dacom@ufrgs.br">dacom@ufrgs.br</a>
                </p>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <a href="https://www.facebook.com/ufrgs.dacom" target="_blank">
                    <i class="fa fa-facebook fa-3x mb-3 sr-contact"></i>
                </a>
                <p>
                    <a href="https://www.facebook.com/ufrgs.dacom" target="_blank">Facebook Page</a>
                </p>
            </div>
            <div class="col-lg-8 mx-auto text-center">
                <br>
                <br>
                <p class="mb-5">
                    Ou nos visitar na sala 116 da Fabico / UFRGS – Ramiro Barcelos, 2705
                </p>
            </div>
        </div>
    </div>
</section>
<div id="snackbar">Recebemos sua Mensagem!</div>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        var idd = $('#identification');
        idd.prop('checked', true);
        idd.click(function () {
            $("#emailDiv").toggle(!this.checked);
        });
    });

    if (<?php echo $msg ?> == 1) {
        var x = $("#snackbar");
        x.addClass("show");
        setTimeout(function () { x.removeClass("show"); }, 3000);
    }
</script>