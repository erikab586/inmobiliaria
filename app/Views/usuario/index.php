<?php echo $this->extend('layout/layout.php'); ?>
<?php echo $this->section('contenido'); ?>
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Listado de Usuarios</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?php echo base_url('/formusuario'); ?>" class="btn btn-success upgrade-to-pro">Nuevo Usuario</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic Tables start -->
            <!-- Striped rows start -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Usuario</h4>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                    <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                    <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                    <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block card-dashboard">
                                <p class="card-text">Listado de Usuarios </p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Roles</th>
                                            <th>UserName</th>
                                            <th>Email</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach ($usuario as $i) : ?>
                                                <tr>
                                                <td><?= $i['id_usuario'] ?></td>
                                                <td><?= $i['descripcion_rol'] ?></td>
                                                <td><?= $i['username'] ?></td>
                                                <td><?= $i['email'] ?></td>
                                                <td>
                                                    <button type="button" value="<?= $i['id_usuario'];?>" class="verUsuario btn btn-success btn-sm"><i class="icon-eye6"></i></button>
                                                    <a class="btn btn-info btn-sm"href="<?php echo base_url('/editarusuarios')."/".$i['id_usuario']?>"><i class="icon-android-create"></i></</a>
                                                    <a class="btn btn-danger btn-sm" href="<?php echo base_url('/eliminarusuarios')."/".$i['id_usuario']?>"><i class="icon-android-delete"></i></</a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Striped rows end -->       
        </div>
      </div>
    </div>
    <div class="modal fade text-xs-left" id="viewUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<label class="modal-title text-text-bold-600" id="myModalLabel33">Información de Usuario</label>
					</div>
					<form action="#">
						<div class="modal-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Id: </label>
                                        <input type="text" name="id" id="id" placeholder="Ingresa Username" class="form-control">
									</div>
								</div>
								<div class="col-md-4">
                                    <div class="form-group">
                                        <label>Rol: </label>
                                        <input type="text" name="rol" id="rol" placeholder="Ingresa Username" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
                                        <label>Username: </label>
                                        <input type="text" name="username" id="username" placeholder="Ingresa Username" class="form-control">
									</div>
								</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
									<div class="form-group">
                                        <label>Nombres: </label>
                                        <input type="text" name="nombres" id="nombres" placeholder="Ingresar Nombres" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
                                        <label>Apellidos: </label>
                                        <input type="text" name="apellidos" id="apellidos" placeholder="Ingresar Apellidos" class="form-control">
									</div>
								</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
									<div class="form-group">
                                        <label>Email: </label>
                                        <input type="email" name="email" id="email" placeholder="Ingresar Email" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
                                        <label>Estatus: </label>
                                        <input type="text" name="estatus" id="estatus" placeholder="Ingresar Password" class="form-control">
									</div>
								</div>
                            </div>
                        </div>
						<div class="modal-footer">
						</div>
					</form>
				</div>
			</div>
		</div>
    <script type="application/javascript">
       
         // Obtén todos los botones con la clase "verUsuario"
        const botonesVerUsuario = document.querySelectorAll('.verUsuario');

        // Agrega un escuchador de eventos a cada botón
        botonesVerUsuario.forEach((boton) => {
            boton.addEventListener('click', function() {
                
                const idUsuario = boton.value;
                 fetch('<?php echo base_url("/buscar/") ?>' + idUsuario)
                    .then(response => response.json())
                    .then(data => {
                        let id= data.dato.id;
                        let roles= data.dato.roles;
                        let email= data.dato.email;
                        let username= data.dato.username;
                        let nombres= data.dato.Nombres;
                        let apellidos= data.dato.Apellidos;
                        let estatus= data.dato.estatus;
                        $('#id').val(id);
                        $('#rol').val(roles);
                        $('#username').val(username);
                        $('#nombres').val(nombres);
                        $('#apellidos').val(apellidos);
                        $('#email').val(email);
                        $('#estatus').val(estatus);
                        $('#viewUser').modal('show');
                    })  
                    .catch(error => {
                        console.log('Error al obtener datos');
                    });
            });
        });
        
       
    </script>
<?php echo $this->endSection();?>

