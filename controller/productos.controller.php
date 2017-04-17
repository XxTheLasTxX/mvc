<?php
require_once 'model/productos.php';

class productosController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new productos();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/productos/productos.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new productos();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/productos/productos-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Crud1(){
        $alm = new productos();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/productos/productos-eliminar.php';
        require_once 'view/footer.php';

    }
     public function Crud2(){
        $alm = new productos();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/productos/productos-nuevo.php';
        require_once 'view/footer.php';

    }

    public function Guardar(){
        $alm = new productos();
        
        $alm->id = $_REQUEST['id'];
        $alm->Nombre = $_REQUEST['Nombre'];
        $alm->Precio = $_REQUEST['Precio'];
        $alm->FechaElaboracion = $_REQUEST['FechaElaboracion'];
         $alm->id > 0 ;
            $this->model->Registrar($alm);
        
        header('Location: index.php');
    }
    public function Editar(){
        $alm = new productos();
        
        $alm->id = $_REQUEST['id'];
        $alm->Nombre = $_REQUEST['Nombre'];
        $alm->Precio = $_REQUEST['Precio'];
        $alm->FechaElaboracion = $_REQUEST['FechaElaboracion'];
            $this->model->Actualizar($alm);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}