<!DOCTYPE html>
<html lang="en">
<?php require_once("./Vistas/Template/header.php");?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php
require_once("./Vistas/Template/nav-bar.php");
require_once("./Vistas/Template/menu_admin.php");
?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administracion de proyectos</h1>
          </div>

        </div>
      </div>
    </section>

    <section class="content">

    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Proyectos</h3>
        </div>
        <div class="card-body">
        <div class="row">
        <div class="col-md-12">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar</button>
        </div>
        </div>
        <br>    
   
        <table class="table table-hover" id="TableProyecto" style="width:100%">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                </table>
            </div>

          </div>



        </div>
      </div>

    </section>
    
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="ModalProyecto">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form enctype="multipart/form-data" name="formlogin" id="FormLoginId" method="post">

        <div class="col">
          <div class="form-group">
          <label for="">Proyecto</label>
          <input type="text" id="proyecto" name="proyecto" class="form-control" placeholder="Nombre del proyecto" required>
          </div>
          
        </div>   

      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success" onclick="GuardarProyecto()">Guardar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="ModalEdit">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Proyecto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form name="formlogin" id="FormLoginId" method="post">

        <div class="col">
          <div class="form-group">
          <label for="">Proyecto</label>
          <input type="text" id="Proyecto_edit" name="Proyecto_edit" class="form-control" placeholder="Nombre del proyecto" required>
          </div>
          </form>
      </div>
      <div class="col">
            <input type="hidden" id="id_proyecto" name="id_proyecto" class="form-control">
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning" onclick="ActualizarProyecto()">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>






  </div>
   <aside class="control-sidebar control-sidebar-dark">

  </aside>

</div>
    
</body>

<script src="../../../Residencias_V1/Assets/js/ProyectoFunction/ProyectoFunction.js"></script>
<script>
  const base_url ="<?php BASE_URL; ?>" 
</script>

</html>