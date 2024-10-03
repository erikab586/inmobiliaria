<?php echo $this->extend('layout/layout.php'); ?>
<?php echo $this->section('contenido'); ?>
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Nuevo Propietario</h2>
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
                                <form class="form" action="<?php echo base_url('/nuevopropietario')?>" method="POST">
                                    <div class="form-body">
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
                                                        <select id="projectinput6" name="rol" class="form-control">
                                                            <option value="0" selected="" disabled="">Seleccionar</option>
                                                            <option value=2>PROPIETARIO</option>
                                                        </select>
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
                                                    <label>Dispensar </label>
                                                    <select id="projectinput6" name="dispensar" class="form-control">
                                                        <option value="2" selected="" disabled="">Seleccionar</option>
                                                        <option value="1">SI DISPENSAR</option>
                                                        <option value="0">NO DISPENSAR</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Factura </label>
                                                    <select id="projectinput6" name="factura" class="form-control">
                                                        <option value="2" selected="" disabled="">Seleccionar</option>
                                                        <option value="1">SI FACTURA</option>
                                                        <option value="0">NO FACTURA</option>
                                                    </select>
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
                                                    <select id="projectinput6" name="pais" class="form-control">
                                                        <option value="0" selected="" disabled="">Seleccionar</option>
                                                        <?php foreach ($pais as $i) : ?>
                                                            <option value="<?php echo $i['id_pais']?>"><?php echo $i['nombre_pais']?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Estado </label>
                                                    <select id="projectinput6" name="estado" class="form-control">
                                                        <option value="0" selected="" disabled="">Seleccionar</option>
                                                        <?php foreach ($estado as $i) : ?>
                                                            <option value="<?php echo $i['id_estado']?>"><?php echo $i['descripcion']?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Municipio </label>
                                                    <select id="projectinput6" name="municipio" class="form-control">
                                                        <option value="0" selected="" disabled="">Seleccionar</option>
                                                        <?php foreach ($municipio as $i) : ?>
                                                            <option value="<?php echo $i['id_municipio']?>"><?php echo $i['nombre_municipio']?></option>
                                                        <?php endforeach; ?>
                                                    </select>
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
                                        <div class="form-actions right">
                                            <button type="button" class="btn btn-danger mr-1">
                                                <i class="icon-cross2"></i> Cancelar
                                            </button>
                                            <button type="submit" class="btn btn-success">
                                                <i class="icon-check2"></i> Guardar
                                            </button>
                                        </div>
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