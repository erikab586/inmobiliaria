<?php echo $this->extend('layout/layoutwo.php'); ?>
<?php echo $this->section('contenido'); ?>
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Editar IVA</h2>
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
                            <form class="form" action="<?php echo base_url('/guardarconcepto')?>" method="POST">
                                <div class="form-body">
                                <input type="hidden" id="idconcepto" class="form-control" value="<?= $concepto['id_concepto']?>" name="idconcepto">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="timesheetinput1">Código</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="codigo" class="form-control" value="<?= $concepto['cod_concepto']?>" name="codigo">
                                                <div class="form-control-position">
                                                    <i class="icon-head"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="timesheetinput1">Concepto</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="concepto" class="form-control" value="<?= $concepto['descripcion']?>" name="concepto">
                                                <div class="form-control-position">
                                                    <i class="icon-head"></i>
                                                </div>
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