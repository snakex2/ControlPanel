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
        <h2>Publicaciones</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Fecha</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($publicaciones as $publicacion ): ?>
                        <?php pr($publicacion); ?>
                        <tr>
                            <td><?php echo $publicacion['Publicacion']['id'] ?></td>
                            <td><?php echo $publicacion['Publicacion']['titulo'] ?></td>
                            <td><?php echo $publicacion['Autor']['nombre'].' '.$publicacion['Autor']['apellido'] ?></td>
                            <td><?php echo $publicacion['Publicacion']['fecha'] ?></td>
                            <td>

                            </td>
                        </tr>
                    <?php  endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>