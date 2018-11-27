<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Notícias</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Notícias do Portal
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <?= !$include ? "<small class='text-warning'>Notícias são limitadas em 3 registros.</small><br><br>" : "" ?>
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Conteúdo</th>
                            <th>Imagem</th>
                            <th>Data</th>
                            <th>#</th>
                            <th>#</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($news as $new) : ?>
                        <tr class="odd gradeX">
                            <td>
                                <?php echo $new['title'] ?>
                            </td>
                            <td>
                                <?php echo substr($new['content'], 0, 10) ?>
                                <?php if (strlen($new['content']) > 10) : ?>...
                                <a data-toggle="modal" data-target="#modal">Ver Mais</a>
                                <div id="modal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <?php echo $new['content'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif ?>
                            </td>
                            <td>
                                <?php if ($new['image']) : ?>
                                <button class="btn btn-default" data-toggle="modal" data-target="#image<?php echo $new['news_id'] ?>">
                                    <i class="fa fa-image"></i> Ver Imagem
                                </button>
                                <div id="image<?php echo $new['news_id'] ?>" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <img class="img-rounded img-responsive" src="<?php echo base_url() ?>uploads/news/<?php echo $new['image'] ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php else : ?> Sem imagem disponível
                                <?php endif ?>
                            </td>
                            <td>
                                <?php $date = date_create($new['date']);
                                echo date_format($date, "d/m/Y"); ?>
                            </td>
                            <td>
                                <button class="btn btn-default" data-toggle="modal" data-target="#preview<?php echo $new['news_id'] ?>">
                                    <i class="fa fa-object-group"></i> Ver Notícia
                                </button>
                                <div id="preview<?php echo $new['news_id'] ?>" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <?php if ($new['image']) : ?>
                                                <img class="img-rounded" src="<?php echo base_url() ?>uploads/news/<?php echo $new['image'] ?>" width="565px" height="300px"
                                                />
                                                <?php endif ?>
                                            </div>
                                            <div class="modal-body">
                                                <h2 class="modal-title">
                                                    <?php echo $new['title'] ?>
                                                </h2>
                                                <small>
                                                    <i class="fa fa-clock-o"></i>
                                                    <?php $date = date_create($new['date']);
                                                    echo date_format($date, "d/m/Y"); ?>
                                                </small>
                                                <h5>
                                                    <?php echo $new['content'] ?>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a class="btn btn-default" href="<?php echo base_url() ?>noticias/editar/<?php echo $new['news_id'] ?>">
                                    <i class="fa fa-edit"></i> Editar
                                </a>
                            </td>
                            <td>
                                <button class="btn btn-default" data-toggle="modal" data-target="#modal<?php echo $new['news_id'] ?>">
                                    <i class="fa fa-window-close"></i> Excluir
                                </button>
                                <div id="modal<?php echo $new['news_id'] ?>" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Você deseja realmente excluir este item?</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <a class="btn btn-success" href="<?php echo base_url() ?>noticias/excluir/<?php echo $new['news_id'] ?>">Sim</a>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<script>
    $(document).ready(function () {
        $('#dataTables').DataTable({
            responsive: true,
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"
            }
        });
    });
</script>