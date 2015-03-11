 <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Publicacion
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> Publicacion
            </li>
        </ol>
    </div>
</div>

<dvi class="row">
    <div class="col-md-8 col-md-push-2">
        <form id="frmPublicacion" action="save_post" method="POST">
            <div class="form-group">
                <label>Titulo:</label>
                <input type="text" name="data[titulo]" class="form-control">
                <p class="help-block">Ej: Nuevo Blog</p>
            </div>
            <div class="form-group">
                <label>Autor</label>
                <input class="form-control" name="data[autor]" placeholder="Ej: Luis perez">
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <input class="form-control" name="data[categoria]" placeholder="Ej:Deporters">
            </div>
            <div class="form-group">
                <label>Imagen</label>
                <input type="text" class="form-control" name="data[imagen]">
            </div>
            <div class="form-group">
                <label>Contenido de la publicacion</label>
                <textarea class="form-control" name="data[contenido]"  rows="7"></textarea>
            </div>
            <div class="form-group">
                <label>Fecha</label>
                <input type='date' class="form-control" name="data[fecha]">
            </div>
            <div class="form-group">
                <a onClick="Publicacion.guardar()" class="btn btn-default">Aceptar</a>
                <button type="reset" class="btn btn-default">Reset</button>
            </div>
            
        </form>
    </div>
    <div class="col-md-6">
        <form action="" role="form">
            
        </form>
    </div>
</dvi>