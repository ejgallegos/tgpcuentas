<div class="panel-body">
    <div class="row">
      <div class="col-md-9">
        <blockquote>
          <p>Informe de Cuentas por Banco</p>
        </blockquote>
      </div>
    </div>

    <form class="form-horizontal" role="form" action="informes_bancos.php" method="GET">
      
      <input type="hidden" name="var" value="bancos1">
      <div class="form-group">
        <label class="col-sm-2 control-label">Banco</label>
        <div class="col-sm-6">
          <select class="form-control" name="banco" required autofocus>
             <option value="">SELECCIONAR BANCO</option>
             <?php
              for($i=0;$i<sizeof($banco);$i++){
             ?>
                <option value="<?php echo $banco[$i]["nombre"]; ?>"> <?php echo $banco[$i]["nombre"]; ?></option>
             <?php
              }
             ?>
          </select>
        </div>
        <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-search"></span></button>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label"></label>
        <div class="col-sm-6">
<!--           <label class="radio-inline">
              <input type="radio" name="radio" id="inlineRadio1" value="1" required>Todas</label> -->
            <label class="radio-inline">
              <input type="radio" name="radio" id="inlineRadio2" value="Operativa" required>Operativas</label>
            <label class="radio-inline">
              <input type="radio" name="radio" id="inlineRadio3" value="Cuenta Unica Tesoro" required>Cuentas Unicas del Tesoro</label>
        </div>
      </div>
      <input type="hidden" name="informe" value="1">

    </form>           
</div>

<?php if (!empty($listar1)) { ?>

<div class="panel-body">
    <div class="row">
      <div class="col-md-9">
        <blockquote>
          <p>Informe por Bancos</p><small><b>Banco: </b><?php echo $listar1[0]["banco"]; ?></small> 
                                                         <small><b>Tipo de Cuenta: </b><?php echo $listar1[0]["fdopropio"]; ?></small>
        </blockquote>
      </div>
          
      <div class="col-md-3">
         <button type="button" class="btn btn-danger" onclick="window.open('cuentas/cantidad_banco_pdf.php', 'popup')"><i class="fa fa-file-pdf-o"></i> PDF</button>      
         <button type="button" class="btn btn-success" onclick="location='cuentas/cantidad_banco_exel.php'"><i class="fa fa-file-excel-o"></i> EXEL</button>      
      </div>

    </div>

                <table class="table">
                  <thead>
                      <tr class="info">
                          <th>#</th>
                          <th>SAF</th>
                          <th>Cuenta</th>
                          <th>Denominación</th>
                          <th>Fecha de Alta</th>
                      </tr>
                  </thead>
                    <tbody>
                                    <?php
                            
                                      for($i=0;$i<sizeof($listar1);$i++){
                                         
                                      ?>
                                      <tr>
                                          <td><?php echo $i; ?></td>
                                          <td><?php echo $listar1[$i]["saf"]; ?></td>
                                          <td><?php echo $listar1[$i]["cta"]; ?></td>
                                          <td><?php echo $listar1[$i]["denominacion"]; ?></td>                                    
                                          <td><?php echo $listar1[$i]["fecha"]; ?></td>                                    
                                      </tr>
                                     
                                     <?php
                                        }
                                      ?>
                    </tbody>
                </table>
</div>  

<?php } ?>
