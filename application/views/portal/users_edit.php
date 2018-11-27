<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edição de Usuários</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Formulário para Edição
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="<?php echo base_url() ?>portal/editar/<?php echo $user['user_id'] ?>">
                            <div class="form-group">
                                <label>Usuário</label>
                                <input class="form-control" name="username" placeholder="Usuário" value="<?php echo $user['username'] ?>" required>
                            </div>
                            <div class="form-group <?php echo $class ?>">
                                <label>Senha</label>
                                <input class="form-control" name="password" type="password" placeholder="Senha" required>
                            </div>
                            <div class="form-group <?php echo $class ?>">
                                <label>Repetir Senha</label>
                                <input class="form-control" name="repeat" type="password" placeholder="Repetir Senha" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Editar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>