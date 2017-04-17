<h1 class="page-header">Productos</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Productos&a=Crud2">Nuevo Producto</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:200px;">Codigo</th>
            <th>Nombre Producto</th>
            <th style="width:120px;">precio</th>
            <th style="width:200px;"">Fecha de Elaboracion</th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id; ?></td>
            <td><?php echo $r->Nombre; ?></td>
            <td><?php echo $r->Precio; ?></td>
            <td><?php echo $r->FechaElaboracion; ?></td>
            <td>
                <a href="?c=Productos&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a  href="?c=Productos&a=Crud1&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
