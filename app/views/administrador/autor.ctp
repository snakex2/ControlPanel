 <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Autor
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> Autor
            </li>
        </ol>
    </div>
</div>

<dvi class="row">
    <div class="col-md-8 col-md-push-2">
        <form id="frmAutor" action="save_autor" method="POST">
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" name="data[nombre]" class="form-control">
                <p class="help-block">Ej: Nuevo Blog</p>
            </div>
            <div class="form-group">
                <label>Apellidos</label>
                <input class="form-control" name="data[apellido]" placeholder="Ej: Luis perez">
            </div>
            <div class="form-group">
                <label>Correo</label>
                <input class="form-control" name="data[correo]" placeholder="Ej:ejemplo@gmail.com">
            </div>
            
            <div class="form-group">
                <a onClick="Autor.guardar()" class="btn btn-default">Aceptar</a>
                <button type="reset" class="btn btn-default">Reset</button>
            </div>
            
        </form>
    </div>
    <div class="col-md-6">
        <form action="" role="form">
            
        </form>
    </div>
</dvi>