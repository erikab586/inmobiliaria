<?php echo $this->extend('layout/layout.php'); ?>
<?php echo $this->section('contenido'); ?>
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Crear Cobranza</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
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
                        <h4 class="card-title" id="basic-layout-icons">LLENAR FORMULARIO</h4>
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
                        <div class="card-block">
                            <form class="form" action="<?php echo base_url('/guardarnuevo')?>" method="POST">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="projectinput6">CUENTA</label>
                                                <select id="projectinput6" name="propietario" class="form-control">
                                                <option value="0" selected="" disabled="">Seleccionar</option>
                                                    <?php foreach ($propiedad as $i) : ?>
                                                        <option value="<?php echo $i['id_propietario']?>"><?php echo $i['codigo_propietario']?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="projectinput6">SUBCUENTA</label>
                                                <select id="projectinput6" name="inmueble" class="form-control">
                                                    <option value="0" selected="" disabled="">Seleccionar</option>
                                                    <?php foreach ($inmueble as $i) : ?>
                                                        <option value="<?php echo $i['id_inmueble']?>"><?php echo $i['codigo_inmueble']?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="projectinput6">SUBSUBCUENTA</label>
                                                <select id="projectinput6" name="unidad" class="form-control">
                                                    <option value="0" selected="" disabled="">Seleccionar</option>
                                                    <?php foreach ($unidad as $i) : ?>
                                                        <option value="<?php echo $i['id_unidad']?>"><?php echo $i['codigo_unidad']?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="projectinput6">INQUILINO</label>
                                                <select id="projectinput6" name="inquilino" class="form-control">
                                                    <option value="0" selected="" disabled="">Seleccionar Inquilino</option>
                                                    <?php foreach ($inquilino as $i) : ?>
                                                        <option value="<?php echo $i['id_inquilino']?>"><?php echo $i['nombres']." ".$i['apellidos']?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>FECHA </label>
                                                <input type="date" name="fecha" id="fecha"  placeholder0="Ingrese Fecha" class="form-control">
                                            </div>
                                        </div> 
                                    </div>        
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>FOLIO </label>
                                                <input type="text" name="folio" id="folio" placeholder="Ingrese Folio" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>CONCEPTO </label>
                                                <input type="text" name="concepto" id="concepto" placeholder="Ingrese Concepto" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>PERIODO </label>
                                                <input type="text" name="periodo" id="periodo" placeholder="Ingrese Periodo" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>CV PERIODO </label>
                                                <input type="text" name="cvperiodo" id="cvperiodo" placeholder="Ingrese CV Periodo" class="form-control">
                                            </div>
                                        </div>
                                    </div>                       
                                    <div class="row">
                                        
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>CV CONCEPTO </label>
                                                <input type="text" name="cvconcepto" id="cvconcepto" placeholder="Ingrese CV Concepto"  class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>COBRANZA </label>
                                                <input type="text" name="cobranza" id="cobranza" placeholder="Ingrese Cobranza" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ABONO </label>
                                                <input type="text" name="abono" id="abono" placeholder="Ingrese Abono" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>MORA </label>
                                                <input type="text" name="mora" id="mora" placeholder="Ingrese Mora"  class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>CONVENIO </label>
                                                <input type="text" name="convenio" id="convenio" placeholder="Ingrese Convenio" class="form-control">
                                            </div>
                                        </div>
                                    </div>      
                                </div>

                                <div class="form-actions right">
                                    <button type="button" class="btn btn-danger mr-1">
                                        <i class="icon-cross2"></i> Cancel
                                    </button>
                                    <button type="submit" class="btn btn-success">
                                        <i class="icon-check2"></i> Save
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- Striped rows end -->
        </div>
      </div>
    </div>
<?php echo $this->endSection();?>