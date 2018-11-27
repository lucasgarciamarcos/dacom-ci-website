<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">

    <title>
        Portal DACOM - Fabico
    </title>

    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/favicon.png" />
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap-admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url() ?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap-admin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src="<?php echo base_url() ?>assets/js/sb-admin-2.js"></script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url() ?>mensagens">Portal Dacom</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    Bem vindx,
                    <?php echo $this->session->user->username ?>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>login">
                        <i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form"></div>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>mensagens">
                                <i class="fa fa-envelope fa-fw"></i> Mensagens
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-users fa-fw"></i> Usuários
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url() ?>portal/usuarios">
                                        <i class="fa fa-list fa-fw"></i> Listagem</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>portal/cadastro">
                                        <i class="fa fa-plus fa-fw"></i> Cadastro</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-newspaper-o fa-fw"></i> Notícias
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url() ?>noticias">
                                        <i class="fa fa-list fa-fw"></i> Listagem</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>noticias/cadastro">
                                        <i class="fa fa-plus fa-fw"></i> Cadastro</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <?php echo $contents; ?>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <div class="footer">
                <span class="footer-text">Gestão Metamorfose - Desenvolvido por Lucas Marcos - 25/10/2018 - Beta</span>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
</body>

</html>