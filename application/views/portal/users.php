<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Usuários</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Usuários do Portal
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                    <thead>
                        <tr>
                            <th>Usuário</th>
                            <th>#</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) : ?>
                        <tr class="odd gradeX">
                            <td>
                                <?php echo $user['username'] ?>
                            </td>
                            <td>
                                <a class="btn btn-default" href="<?php echo base_url() ?>portal/editar/<?php echo $user['user_id'] ?>">
                                    <i class="fa fa-edit"></i> Editar
                                </a>
                            </td>
                            <td>
                                <button class="btn btn-default" data-toggle="modal" data-target="#modal<?php echo $user['user_id'] ?>">
                                    <i class="fa fa-window-close"></i> Excluir
                                </button>
                                <div id="modal<?php echo $user['user_id'] ?>" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Você deseja realmente excluir este item?</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div>
                                                    <a class="btn btn-success" href="<?php echo base_url() ?>portal/excluir/<?php echo $user['user_id'] ?>">Sim</a>
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