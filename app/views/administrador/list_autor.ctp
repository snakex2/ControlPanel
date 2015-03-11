<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Tables
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-table"></i> Tables
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<div class="row">
    
    <div class="col-md-8 col-md-push-2">
        <h2>Autores</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Publicaciones</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($autores as $autor ): ?>
                        <?php pr($autor); ?>
                        <tr>
                            <td><?php echo $autor['Autor']['id'] ?></td>
                            <td><?php echo $autor['Autor']['nombre'] ?></td>
                            <td><?php echo $autor['Autor']['apellido'] ?></td>
                            <td><?php echo $autor['Autor']['correo'] ?></td>
                            <td><?php $max=sizeof($autor['Publicacion']);
                            for ($i=$max-1; $i>=0; $i--) { 
                                if($i==0)
                                    echo $autor['Publicacion'][$i]['titulo'];
                                else echo $autor['Publicacion'][$i]['titulo'].', ';
                            } ?></td>
                            <td>

                            </td>
                        </tr>
                    <?php  endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>