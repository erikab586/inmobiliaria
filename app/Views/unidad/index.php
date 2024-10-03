<?php echo $this->extend('layout/layout.php'); ?>
<?php echo $this->section('contenido'); ?>
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Listado de Unidades</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="btn btn-success upgrade-to-pro" href="<?php echo base_url('/crearunidad')?>">
                    Nueva Unidad</a>
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
                            <h4 class="card-title">Unidad</h4>
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
                                <p class="card-text">Listado de Unidad </p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>SubCuenta</th>
                                            <th>SubSubCuenta</th>
                                            <th>Tipo</th>
                                            <th>Recamaras</th>
                                            <th>Baños</th>
                                            <th>Closets</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach ($unidad as $i) : ?>
                                                <tr>
                                                <td><?= $i['id_unidad'] ?></td>
                                                <td><?= $i['codigo_inmueble'] ?></td>
                                                <td><?= $i['codigo_unidad'] ?></td>
                                                <td><?= $i['nombre_tipo']?></td>
                                                <td><?= $i['recamaras']?></td>
                                                <td><?= $i['baños']?></td>
                                                <td><?= $i['closets']?></td>
                                                <td>
                                                    <button type="button" title="VER" value="<?= $i['id_unidad'];?>" class="verUnidad btn btn-success btn-sm"><i class="icon-eye6"></i></button>
                                                    <a title="EDITAR" class="btn btn-info btn-sm"href="<?php echo base_url('/editarunidad')."/".$i['id_unidad']?>"><i class="icon-android-create"></i></a>
                                                    <a  title="BORRAR" class="btn btn-danger btn-sm" href="<?php echo base_url('/eliminarunidad')."/".$i['id_unidad']?>"><i class="icon-android-delete"></i></a>
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
						<label class="modal-title text-text-bold-600" id="myModalLabel33">Información de Unidad</label>
					</div>
					<form action="#">
						<div class="modal-body">
                                        <div class="row">
                                            <input type="hidden" id="id_unidad">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="projectinput6">Inmuebles</label>
                                                    <input type="text" id="inmueble" name="inmueble" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="projectinput6">Tipo</label>
                                                    <input type="text" id="tipo" name="tipo" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Código Unidad </label>
                                                    <input type="text" name="codigo_unidad" id="codigo_unidad"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Dim. Terreno </label>
                                                    <input type="text" name="dim_terreno" id="dim_terreno"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Dim. Contrucción </label>
                                                    <input type="text" name="dim_construccion" id="dim_construccion"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Antiguedad</label>
                                                    <input type="text" name="antiguedad" id="antiguedad"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Recamaras </label>
                                                    <input type="text" name="recamaras" id="recamaras"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Closets </label>
                                                    <input type="text" name="closets" id="closets"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Baños </label>
                                                    <input type="text" name="baños" id="baños"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° MediosBaños </label>
                                                    <input type="text" name="medios_baños" id="medios_baños"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Estudios </label>
                                                    <input type="text" name="estudios" id="estudios"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Área Servicio </label>
                                                    <input type="text" name="area_servicio" id="area_servicio"  class="form-control">
                                                </div>
                                            </div>
                                        </div>                       
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Cuarto Servicio </label>
                                                    <input type="text" name="tiempo" id="tiempo"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Estacionamiento </label>
                                                    <input type="text" name="num_estacionamiento" id="num_estacionamiento"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Lugar Estacionamiento </label>
                                                    <input type="text" name="lugar_estacionamiento" id="lugar_estacionamiento"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="projectinput6">Cocina Equipada</label>
                                                    <input type="text" id="cocina_equipada" name="cocina_equipada" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="projectinput6">Vigilancia</label>
                                                    <input type="text" id="vigilancia" name="vigilancia" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="projectinput6">Cisterna</label>
                                                    <input type="text" id="cisterna" name="cisterna" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Plantas</label>
                                                    <input type="text" name="plantas" id="plantas"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Nivel/Piso</label>
                                                    <input type="text" name="nivel" id="nivel"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Tipo Jardín</label>
                                                    <input type="text" name="jardin" id="jardin"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>N° Elevadores</label>
                                                    <input type="text" name="elevadores" id="elevadores"  class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Amenidades</label>
                                                    <input type="text" name="amenidades" id="amenidades"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Otras Caracteristicas</label>
                                                    <textarea type="text" name="caracteristicas" id="caracteristicas"  class="form-control"></textarea>
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
        const botonesVerUsuario = document.querySelectorAll('.verUnidad');

        // Agrega un escuchador de eventos a cada botón
        botonesVerUsuario.forEach((boton) => {
            boton.addEventListener('click', function() {
                
                const idUnidad = boton.value;
                 fetch('<?php echo base_url("/buscarunidad/") ?>' + idUnidad)
                    .then(response => response.json())
                    .then(data => {
                        let id= data.dato.codigo_unidad;
                        var miEtiqueta = document.getElementById('myModalLabel33');
                        miEtiqueta.innerHTML = 'Información de Unidad, SubSubcuenta: ' + id;
                        $('#id_unidad').val(data.dato.id_unidad);
                        $('#inmueble').val(data.dato.codigo_inmueble);
                        $('#tipo').val(data.dato.nombre_tipo);
                        $('#codigo_unidad').val(data.dato.codigo_unidad);
                        $('#dim_terreno').val(data.dato.dim_terreno);
                        $('#dim_construccion').val(data.dato.dim_construccion);
                        $('#antiguedad').val(data.dato.antiguedad);
                        $('#recamaras').val(data.dato.recamaras);
                        $('#closets').val(data.dato.closets);
                        $('#baños').val(data.dato.banos);
                        $('#medios_baños').val(data.dato.medios_banos);
                        $('#estudios').val(data.dato.estudios);
                        $('#area_servicio').val(data.dato.area_servicio);
                        $('#num_cuarto_servicio').val(data.dato.cuartos_servicio);
                        $('#num_estacionamiento').val(data.dato.estacionamiento);
                        $('#lugar_estacionamiento').val(data.dato.num_estacionamiento);
                        $('#cocina_equipada').val(data.dato.cocina_equipada);
                        $('#vigilancia').val(data.dato.vigilancia);
                        $('#cisterna').val(data.dato.cisterna);
                        $('#plantas').val(data.dato.num_plantas);
                        $('#nivel').val(data.dato.piso_nivel);
                        $('#jardin').val(data.dato.tipo_jardin);
                        $('#elevadores').val(data.dato.cant_elevadores);
                        $('#cisterna').val(data.dato.cisterna);
                        $('#amenidades').val(data.dato.amenidades);
                        $('#caracteristicas').val(data.dato.otras_caracteristicas);
                        $('#viewContrato').modal('show');
                    })  
                    .catch(error => {
                        console.log('Error al obtener datos');
                    });
            });
        });
    </script>
<?php echo $this->endSection();?>