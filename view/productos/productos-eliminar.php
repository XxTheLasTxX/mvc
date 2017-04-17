<h1 class="page-header">
<h1>Eliminar</h1>
    <?php echo $alm->id != null ? $alm->Nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Productos">Productos</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->Nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-productos" action="?c=Productos&a=Eliminar" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label>Codigo</label>
        <input type="text" name="id" value="<?php echo $alm->id; ?>" class="form-control"   />
    </div>
    
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Eliminar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-productos").submit(function(){
            return $(this).validate();
        });
    })
</script>