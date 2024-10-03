<?php echo $this->extend('layout/layout.php'); ?>
<?php echo $this->section('contenido'); ?>
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Listado de Inmuebles</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="btn btn-success upgrade-to-pro" href="<?php echo base_url('/crearinmueble')?>">
                    Nuevo Inmueble</a>
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
                            <h4 class="card-title">Inmueble</h4>
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
                                <p class="card-text">Listado de Inmueble </p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Cuenta</th>
                                            <th>SubCuenta</th>
                                            <th>Propietario</th>
                                            <th>Inmueble</th>
                                            <th>Unid.</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach ($inmueble as $i) : ?>
                                                <tr>
                                                <td><?= $i['id_inmueble'] ?></td>
                                                <td><?= $i['codigo_propietario'] ?></td>
                                                <td><?= $i['codigo_inmueble'] ?></td>
                                                <td><?= $i['nombres']." ".$i['apellidos'] ?></td>
                                                <td><?= $i['calle'] ?></td>
                                                <td><?= $i['unidades'] ?></td>
                                                <td>
                                                    <button title="VER" type="button" value="<?= $i['id_inmueble'];?>" class="verInmueble btn btn-danger btn-sm"><i class="icon-eye6"></i></button>
                                                    <a title="EDITAR" class="btn btn-info btn-sm"href="<?php echo base_url('/editarinmueble')."/".$i['id_inmueble']?>"><i class="icon-android-create"></i></</a>
                                                    <a title="BORRAR" class="btn btn-success btn-sm" href="<?php echo base_url('/eliminarinmueble')."/".$i['id_inmueble']?>"><i class="icon-android-delete"></i></</a>
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
    <div class="modal fade text-xs-left" id="viewContrato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<label class="modal-title text-text-bold-600" id="myModalLabel33">Información de Contrato</label>
					</div>
					<form action="#">
						<div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="projectinput6">Cuenta</label>
                                                    <input type="text" name="propietario" id="propietario"  class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>SubCuenta </label>
                                                    <input type="text" name="codigo" id="codigo"  class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="projectinput6">Pais</label>
                                                    <input type="text" name="pais" id="pais"  class="form-control">
                                               
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="projectinput6">Estado</label>
                                                    <input type="text" name="estado" id="estado"  class="form-control">
                                               
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="projectinput6">Municipio</label>
                                                    <input type="text" name="municipio" id="municipio"  class="form-control">
                                               
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Colonia </label>
                                                    <input type="text" name="colonia" id="colonia"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Ciudad </label>
                                                    <input type="text" name="ciudad" id="ciudad"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Calle </label>
                                                    <input type="text" name="calle" id="calle"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Número </label>
                                                    <input type="text" name="numero" id="numero"  class="form-control">
                                                </div>
                                            </div>
                                        </div>                       
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Código Postal </label>
                                                    <input type="text" name="cp" id="cp"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Número Ext </label>
                                                    <input type="text" name="ext" id="ext"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Número Int </label>
                                                    <input type="text" name="interior" id="interior"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Enseña </label>
                                                    <input type="text" name="enseña" id="enseña"  class="form-control">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Referencia </label>
                                                    <input type="text" name="referencia" id="referencia"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Trasnporte </label>
                                                    <input type="text" name="transporte" id="transporte"  class="form-control">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Locales </label>
                                                    <input type="text" name="locales" id="locales"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Unidades </label>
                                                    <input type="text" name="unidades" id="unidades"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="projectinput6">Uso</label>
                                                    <input type="text" name="uso" id="uso"  class="form-control">
                                               
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="projectinput6">Tipo</label>
                                                    <input type="text" name="tipo" id="tipo"  class="form-control">
                                               
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
        const botonesVerUsuario = document.querySelectorAll('.verInmueble');

        // Agrega un escuchador de eventos a cada botón
        botonesVerUsuario.forEach((boton) => {
            boton.addEventListener('click', function() {
                
                const idInmueble = boton.value;
                 fetch('<?php echo base_url("/buscarinmueble/") ?>' + idInmueble)
                    .then(response => response.json())
                    .then(data => {
                        let id= data.dato.codigo_inmueble;
                        var miEtiqueta = document.getElementById('myModalLabel33');
                        miEtiqueta.innerHTML = 'Información de Inmueble, SubCuenta: ' + id;
                        $('#propietario').val(data.dato.propietario);
                        $('#codigo').val(data.dato.codigo_inmueble);
                        $('#pais').val(data.dato.pais);
                        $('#estado').val(data.dato.estado);
                        $('#municipio').val(data.dato.municipio);
                        $('#colonia').val(data.dato.colonia);
                        $('#ciudad').val(data.dato.ciudad);
                        $('#calle').val(data.dato.calle);
                        $('#numero').val(data.dato.numero);
                        $('#ext').val(data.dato.num_ext);
                        $('#interior').val(data.dato.num_int);
                        $('#cp').val(data.dato.codigo_postal);
                        $('#referencia').val(data.dato.referencia);
                        $('#enseña').val(data.dato.enseña);
                        $('#transporte').val(data.dato.transporte);
                        $('#locales').val(data.dato.locales);
                        $('#unidades').val(data.dato.unidades);
                        $('#uso').val(data.dato.uso);
                        $('#tipo').val(data.dato.tipo);

                        $('#viewContrato').modal('show');
                    })  
                    .catch(error => {
                        console.log('Error al obtener datos');
                    });
            });
        });
    </script>
<?php echo $this->endSection();?>