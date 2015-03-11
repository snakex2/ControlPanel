<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Login
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
    <div class="col-md-5 col-md-push-3">
        <form id="frmPublicacion" action="save_post" method="POST">
            <div class="form-group">
                <label>Usurario:</label>
                <input type="text" name="data[titulo]" class="form-control">
                <p class="help-block">Ej: UserName</p>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type='password' class="form-control" name="data[autor]" placeholder="Ej: GFDer7875">
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