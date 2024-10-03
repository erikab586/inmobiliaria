<?php echo $this->extend('layout/layoutwo.php'); ?>
<?php echo $this->section('contenido'); ?>
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Editar Inmueble</h2>
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
                                <form class="form" action="<?php echo base_url('/guardarinmueble')?>" method="POST">
                                    <div class="form-body">
                                        <?php foreach($inmueble as $item){?>
                                        <div class="row">
                                            <input type="hidden" name="id" id="id" value="<?= $item['id_inmueble']?>">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="projectinput6">Cuenta</label>
                                                        <select id="projectinput6" name="propietario" class="form-control">
                                                            <option value="<?= $item['id_propietario']?>"><?= $item['codigo_propietario']?></option>
                                                            <?php foreach ($propietario as $i) : ?>
                                                                <option value="<?php echo $i['id_propietario']?>"><?php echo $i['codigo_propietario']?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>SubCuenta </label>
                                                    <input type="text" name="codigo" id="codigo" value="<?= $item['codigo_inmueble']?>" class="form-control">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="projectinput6">Pais</label>
                                                        <select id="projectinput6" name="pais" class="form-control">
                                                            <option value="<?= $item['id_pais']?>"><?= $item['nombre_pais']?></option>
                                                            <?php foreach ($pais as $i) : ?>
                                                                <option value="<?php echo $i['id_pais']?>"><?php echo $i['nombre_pais']?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="projectinput6">Estado</label>
                                                        <select id="projectinput6" name="estado" class="form-control">
                                                            <option value="<?= $item['id_estado']?>"><?= $item['descripcion']?></option>
                                                            <?php foreach ($estado as $i) : ?>
                                                                <option value="<?php echo $i['id_estado']?>"><?php echo $i['descripcion']?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="projectinput6">Municipio</label>
                                                        <select id="projectinput6" name="municipio" class="form-control">
                                                            <option value="<?= $item['nombre_municipio']?>"><?= $item['nombre_municipio']?></option>
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
                                                    <label>Colonia </label>
                                                    <input type="text" name="colonia" id="colonia"  value="<?= $item['colonia']?>"class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Ciudad </label>
                                                    <input type="text" name="ciudad" id="ciudad" value="<?= $item['ciudad']?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Calle </label>
                                                    <input type="text" name="calle" id="calle" value="<?= $item['calle']?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Número </label>
                                                    <input type="text" name="numero" id="numero" value="<?= $item['numero']?>" class="form-control">
                                                </div>
                                            </div>
                                        </div>                       
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Código Postal </label>
                                                    <input type="text" name="cp" id="cp" value="<?= $item['codigo_postal']?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Número Ext </label>
                                                    <input type="text" name="ext" id="ext" value="<?= $item['num_ext']?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Número Int </label>
                                                    <input type="text" name="interior" id="interior" value="<?= $item['num_int']?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Enseña </label>
                                                    <input type="text" name="enseña" id="enseña" value="<?= $item['enseña']?>" class="form-control">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Referencia </label>
                                                    <input type="text" name="referencia" id="referencia" value="<?= $item['referencia']?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Trasnporte </label>
                                                    <input type="text" name="transporte" id="transporte" value="<?= $item['transporte']?>" class="form-control">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Locales </label>
                                                    <input type="text" name="locales" id="locales" value="<?= $item['locales']?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Unidades </label>
                                                    <input type="text" name="unidades" id="unidades" value="<?= $item['unidades']?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="projectinput6">Uso</label>
                                                        <select id="projectinput6" name="uso" class="form-control">
                                                            <option value="<?= $item['id_uso']?>"><?= $item['nombre_uso']?></option>
                                                            <?php foreach ($uso as $i) : ?>
                                                                <option value="<?php echo $i['id_uso']?>"><?php echo $i['nombre_uso']?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="projectinput6">Tipo</label>
                                                        <select id="projectinput6" name="tipo" class="form-control">
                                                            <option value="<?= $item['id_tipo']?>"><?= $item['nombre_tipo']?></option>
                                                            <?php foreach ($tipo as $i) : ?>
                                                                <option value="<?php echo $i['id_tipo']?>"><?php echo $i['nombre_tipo']?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        <?php } ?>
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