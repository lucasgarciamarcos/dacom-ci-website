<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edição de Notícias</h1>
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
                        <form role="form" method="post" id="newsform" enctype="multipart/form-data" action="<?php echo base_url() ?>noticias/editar/<?php echo $new['news_id'] ?>">
                            <div class="form-group">
                                <label>Título</label>
                                <input class="form-control" name="title" maxlength="50" placeholder="Título" value="<?php echo $new['title'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Link do Evento</label>
                                <input class="form-control" name="facebook_event" maxlength="150" placeholder="Link do Evento" value="<?php echo $new['facebook_event'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Conteúdo</label>
                                <textarea class="form-control" form="newsform" name="content" maxlength="100" rows="5" placeholder="Conteúdo" required><?php echo $new['content'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Imagem</label>
                                <input name="image" type="file">
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