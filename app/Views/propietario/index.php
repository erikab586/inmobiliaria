<?php echo $this->extend('layout/layout.php'); ?>
<?php echo $this->section('contenido'); ?>
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Listado de Propietarios</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="btn btn-success upgrade-to-pro" href="<?php echo base_url('/crearpropietario')?>">
                    Nuevo Propietario</a>
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
                            <h4 class="card-title">Propietario</h4>
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
                                <p class="card-text">Listado de Propietarios </p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Cuenta</th>
                                            <th>Propietario</th>
                                            <th>Móvil</th>
                                            <th>Casa</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach ($propietario as $i) : ?>
                                                <tr>
                                                <td><?= $i['id_propietario'] ?></td>
                                                <td><?= $i['codigo_propietario'] ?></td>
                                                <td><?= $i['nombres'].' '.$i['apellidos'] ?></td>
                                                <td><?= $i['telefono_movil'] ?></td>
                                                <td><?= $i['telefono_casa']?></td>
                                                <td>
                                                    <button title="VER" type="button" value="<?= $i['id_propietario'];?>" class="verPropietario btn btn-danger btn-sm"><i class="icon-eye6"></i></button>
                                                    <a title="EDITAR" class="btn btn-info btn-sm"href="<?php echo base_url('/editarpropietario')."/".$i['id_propietario']?>"><i class="icon-android-create"></i></</a>
                                                    <a title="BORRAR" class="btn btn-success btn-sm" href="<?php echo base_url('/eliminarpropietario')."/".$i['id_propietario']?>"><i class="icon-android-delete"></i></</a>
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
						<label class="modal-title text-text-bold-600" id="myModalLabel33">Información de Propietario, Cuenta</label>
					</div>
					<form action="#">
						<div class="modal-body">
                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Código </label>
                                                    <input type="text" name="propietario" id="propietario"  class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="projectinput6">Roles</label>
                                                    <input type="text" name="rol" id="rol"  class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Nombres </label>
                                                    <input type="text" name="nombres" id="nombres"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Apellidos </label>
                                                    <input type="text" name="apellidos" id="apellidos"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>RFC </label>
                                                    <input type="text" name="rfc" id="rfc"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>CP Fiscal </label>
                                                    <input type="text" name="cp" id="cp"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Regimén Fiscal </label>
                                                    <input type="text" name="regimen" id="regimen"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Dispensar Ingreso </label>
                                                    <input type="text" name="dispensar" id="dispensar"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Factura </label>
                                                    <input type="text" name="factura" id="factura"  class="form-control">
                                                </div>
                                            </div>
                                        </div>                       
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Porcentaje  </label>
                                                    <input name="porcentaje" id="porcentaje"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Código Postal </label>
                                                    <input type="text" name="codigo" id="codigo"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Email Principal </label>
                                                    <input type="text" name="prin" id="prin"  class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="projectinput6">Email Secundario</label>
                                                    <input type="text" name="sec" id="sec"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Telefono Móvil  </label>
                                                    <input name="movil" id="movil"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Telefono Casa </label>
                                                    <input type="text" name="casa" id="casa"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Telefono Trabajo </label>
                                                    <input type="text" name="trabajo" id="trabajo"  class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="projectinput6">Telefono Trabajo2</label>
                                                    <input type="text" name="trabajo2" id="trabajo2"  class="form-control">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Banco  </label>
                                                    <input name="banco" id="banco"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Clabe </label>
                                                    <input type="text" name="clabe" id="clabe"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Titular </label>
                                                    <input type="text" name="titular" id="titular"  class="form-control">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Instrucciones Pagos  </label>
                                                    <input type="text" name="pago" id="pago"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Instrucciones Extras </label>
                                                    <input type="text" name="extras" id="extras"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Pais  </label>
                                                    <input type="text" name="pais" id="pais"  class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Estado </label>
                                                    <input type="text" name="estado" id="estado"  class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Municipio </label>
                                                    <input type="text" name="municipio" id="municipio"  class="form-control">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Colonia  </label>
                                                    <input name="colonia" id="colonia"  class="form-control">
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
                        </div>
						<div class="modal-footer">
						</div>
					</form>
				</div>
			</div>
		</div>
    <script type="application/javascript">
         // Obtén todos los botones con la clase "verUsuario"
        const botonesVerUsuario = document.querySelectorAll('.verPropietario');

        // Agrega un escuchador de eventos a cada botón
        botonesVerUsuario.forEach((boton) => {
            boton.addEventListener('click', function() {
                
                const idPropietario= boton.value;
                 fetch('<?php echo base_url("/buscarpropietario/") ?>' + idPropietario)
                    .then(response => response.json())
                    .then(data => {
                        let id= data.dato.codigo_propietario;
                        var miEtiqueta = document.getElementById('myModalLabel33');
                        miEtiqueta.innerHTML = 'Información de Propietario, Cuenta: ' + id;
                        $('#propietario').val(data.dato.codigo_propietario);
                        $('#rol').val(data.dato.rol);
                        $('#nombres').val(data.dato.nombres);
                        $('#apellidos').val(data.dato.apellidos);
                        $('#rfc').val(data.dato.rfc);
                        $('#cp').val(data.dato.cp_fiscal);
                        $('#regimen').val(data.dato.regimen_fiscal);
                        $('#dispensar').val(data.dato.dispensar_ingresos);
                        $('#factura').val(data.dato.factura);
                        $('#codigo').val(data.dato.codigo_postal);
                        $('#prin').val(data.dato.email_prin);
                        $('#sec').val(data.dato.email_sec);
                        $('#movil').val(data.dato.telefono_movil);
                        $('#casa').val(data.dato.telefono_casa);
                        $('#trabajo').val(data.dato.telefono_trabajo);
                        $('#trabajo2').val(data.dato.telefono2_trabajo);
                        $('#banco').val(data.dato.banco_deposito);
                        $('#clabe').val(data.dato.cuenta_clabe);
                        $('#titular').val(data.dato.titular_cuenta);
                        $('#porcentaje').val(data.dato.porcentaje);
                        $('#pago').val(data.dato.instrucciones_pago);
                        $('#extras').val(data.dato.instrucciones_extras);
                        $('#pais').val(data.dato.pais);
                        $('#estado').val(data.dato.estado);
                        $('#municipio').val(data.dato.municipio);
                        $('#colonia').val(data.dato.colonia);
                        $('#ciudad').val(data.dato.ciudad);
                        $('#calle').val(data.dato.calle);
                        $('#numero').val(data.dato.numero);
                        $('#viewContrato').modal('show');
                    })  
                    .catch(error => {
                        console.log('Error al obtener datos');
                    });
            });
        });
    </script>
<?php echo $this->endSection();?>