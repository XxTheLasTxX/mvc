<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->Nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Productos">Productos</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->Nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-productos" action="?c=Productos&a=Guardar" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label>Codigo</label>
        <input type="text" name="id" value="<?php echo $alm->id; ?>" class="form-control"   />
    </div>
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $alm->Nombre; ?>" class="form-control" placeholder="Ingrese su nombre" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Precio</label>
        <input type="text" name="Precio" value="<?php echo $alm->Precio; ?>" class="form-control" placeholder="Ingrese el Precio" data-validacion-tipo="requerido|min:2" />
    </div>
        
    <div class="form-group">
        <label>Fecha de Elaboracion</label>
        <input  type="text" name="FechaElaboracion" value="<?php echo $alm->FechaElaboracion; ?>" class="form-control datepicker" placeholder="Ingrese la fecha de Elaboracion" data-validacion-tipo="requerido" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-productos").submit(function(){
            return $(this).validate();
        });
    })
</script>