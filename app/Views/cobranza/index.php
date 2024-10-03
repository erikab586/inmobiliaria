<?php echo $this->extend('layout/layout.php'); ?>
<?php echo $this->section('contenido'); ?>
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Listado de Cobranza</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?php echo base_url('/mora')?>"  class="btn btn-success">Generar Mora</a>
                    </li>
                    <li class="breadcrumb-item">
                    <a href="<?php echo base_url('/generador')?>"  class="btn btn-success">Generar Cobranza</a>
                    </li>
                    <li class="breadcrumb-item">
                    <a href="<?php echo base_url('/crearcobranza')?>"  class="btn btn-success">Nueva Cobranza</a>
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
                            <h4 class="card-title">Cobranza</h4>
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
                                <p class="card-text">Listado de Cobranza </p>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>CTA</th>
                                            <th>SUBCTA</th>
                                            <th>SUBSUBTA</th>
                                            <th>FECHA</th>
                                            <th >CVCONCEPTO</th>
                                            <th>PERIODO</th>
                                            <th>MORA</th>
                                            <th>COBRO</th>
                                            <th style="text-align:center">ACCION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach ($cobranza as $i) : ?>
                                                <tr>
                                                <td><?= $i['id_cobranza'] ?></td>
                                                <td><?= $i['codigo_propietario'] ?></td>
                                                <td><?= $i['codigo_inmueble'] ?></td>
                                                <td><?= $i['codigo_unidad'] ?></td>
                                                <td><?= $i['fecha'] ?></td>
                                                <td ><?= "0".$i['cv_concepto'] ?></td>
                                                <td><?= $i['periodo'] ?></td>
                                                <td><?= $i['mora'] ?></td>
                                                <td><?= $i['cobranza'] ?></td>
                                                <td>
                                                    <button class="verCobranza btn btn-success btn-sm" type="button" value="<?= $i['id_cobranza'];?>" ><i class="icon-eye6"></i></button>
                                                    <a class="btn btn-info btn-sm" href="<?php echo base_url('/editarcobranza')."/".$i['id_cobranza']?>" ><i class="icon-android-create"></i></a>
                                                    <a class="btn btn-danger btn-sm" href="<?php echo base_url('/eliminarcobranza')."/".$i['id_cobranza']?>" ><i class="icon-android-delete"></i></a>
                                                      
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
        <div class="modal fade text-xs-left" id="viewCobranza" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
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
                                        <label>CUENTA </label>
                                        <input type="text" name="propietario" id="propietario" placeholder=" " class="form-control" readonly="true">
									</div>
								</div>
								<div class="col-md-2">
                                    <div class="form-group">
                                        <label>SUBCUENTA </label>
                                        <input type="text" name="codInm" id="codInm" placeholder=" " class="form-control" readonly="true">
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
                                        <label>SUBSUSBCUENTA </label>
                                        <input type="text" name="codUni" id="codUni" placeholder=" " class="form-control" readonly="true">
									</div>
								</div>
                                <div class="col-md-3">
									<div class="form-group">
                                        <label>NOMBRES </label>
                                        <input type="text" name="nombres" id="nombres" placeholder=" " class="form-control" readonly="true">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
                                        <label>APELLIDOS </label>
                                        <input type="text" name="apellidos" id="apellidos" placeholder=" " class="form-control" readonly="true">
									</div>
								</div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
									<div class="form-group">
                                        <label>CONCEPTO </label>
                                        <input type="text" name="concepto" id="concepto" placeholder=" " class="form-control" readonly="true">
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
                                        <label>CV CONCEPTO </label>
                                        <input type="text" name="cv_concepto" id="cv_concepto" placeholder=" " class="form-control" readonly="true">
									</div>
								</div>
                                <div class="col-md-3">
									<div class="form-group">
                                        <label>PERIODO </label>
                                        <input type="text" name="periodo" id="periodo" placeholder=" " class="form-control" readonly="true">
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
                                        <label>CV PERIODO </label>
                                        <input type="text" name="cv_periodo" id="cv_periodo" placeholder=" " class="form-control" readonly="true">
									</div>
								</div>
                                <div class="col-md-2">
									<div class="form-group">
                                        <label>FECHA</label>
                                        <input type="date" name="fecha" id="fecha" placeholder=" " class="form-control" readonly="true">
									</div>
								</div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
									<div class="form-group">
                                        <label>FOLIO </label>
                                        <input type="text" name="folio" id="folio" placeholder=" " class="form-control" readonly="true">
									</div>
								</div>
                                <div class="col-md-3">
									<div class="form-group">
                                        <label>COBRANZA </label>
                                        <input type="text" name="cobranza" id="cobranza" placeholder=" " class="form-control" readonly="true">
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
                                        <label>ABONO </label>
                                        <input type="text" name="abono" id="abono" placeholder="Ingresar Password" class="form-control" readonly="true">
									</div>
								</div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>MORA </label>
                                        <input type="text" name="mora" id="mora" placeholder=" " class="form-control" readonly="true">
									</div>
								</div>
                                <div class="col-md-2">
									<div class="form-group">
                                        <label>ESTATUS </label>
                                        <input type="estatus" name="estatus" id="estatus" placeholder=" " class="form-control" readonly="true">
									</div>
								</div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
									<div class="form-group">
                                        <label>CONVENIO </label>
                                        <input type="text" name="convenio" id="convenio" placeholder=" " class="form-control" readonly="true">
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
        const botonesVerUsuario = document.querySelectorAll('.verCobranza');

        // Agrega un escuchador de eventos a cada botón
        botonesVerUsuario.forEach((boton) => {
            boton.addEventListener('click', function() {
                
                const idCobranza = boton.value;
                console.log(idCobranza);
                 fetch('<?php echo base_url("/buscarcobranza/") ?>' + idCobranza)
                    .then(response => response.json())
                    .then(data => {
                    
                        let id= data.dato.id;
                        let codInm= data.dato.inmueble;
                        let codUni= data.dato.unidad;
                        let nombres= data.dato.nombres;
                        let apellidos= data.dato.apellidos;
                        let codPropietario= data.dato.propietario;

                        let fecha= data.dato.fecha;
                        let folio= data.dato.folio;
                        let concepto= data.dato.concepto;
                        let cv_concepto= data.dato.cv_concepto;

                        let periodo= data.dato.periodo;
                        let cv_periodo= data.dato.cv_periodo;
                        let cobranza= data.dato.cobranza;
                        let abono= data.dato.abono;

                        let mora= data.dato.mora;
                        let convenio= data.dato.convenio;
                        let estatus= data.dato.estatus;
                        
                        
                        var miEtiqueta = document.getElementById('myModalLabel33');
                        miEtiqueta.innerHTML = 'Información de Cobranza de ID: 000' + id;
                        $('#propietario').val(codPropietario);
                        $('#codInm').val(codInm);
                        $('#codUni').val(codUni);
                        $('#nombres').val(nombres);
                        $('#apellidos').val(apellidos);

                        $('#fecha').val(fecha);
                        $('#folio').val(folio);
                        $('#concepto').val(concepto);
                        $('#cv_concepto').val(cv_concepto);
                        $('#periodo').val(periodo);

                        $('#cv_periodo').val(cv_periodo);
                        $('#cobranza').val(cobranza);
                        $('#abono').val(abono);
                        $('#mora').val(mora);
                        $('#convenio').val(convenio);
                        $('#estatus').val(estatus);

                        $('#viewCobranza').modal('show');
                    })  
                    .catch(error => {
                        console.log('Error al obtener datos');
                    });
            });
        });
    </script>
<?php echo $this->endSection();?>