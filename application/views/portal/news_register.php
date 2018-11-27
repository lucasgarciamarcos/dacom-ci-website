<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Cadastro de Notícias</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Formulário para Cadastro
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" enctype="multipart/form-data" method="post" id="newsform" action="<?php echo base_url() ?>noticias/cadastro">
                            <div class="form-group">
                                <label>Título</label>
                                <input class="form-control" name="title" maxlength="50" placeholder="Título" required>
                            </div>
                            <div class="form-group">
                                <label>Link do Evento</label>
                                <input class="form-control" name="facebook_event" maxlength="150" placeholder="Link do Evento" required>
                            </div>
                            <div class="form-group">
                                <label>Conteúdo</label>
                                <textarea class="form-control" form="newsform" maxlength="100" name="content" rows="5" placeholder="Conteúdo" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Imagem</label>
                                <input name="image" type="file">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>