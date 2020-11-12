  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear solicitud</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Crear solicitud</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="background:#20c997;">
                <h3 class="card-title">REQUISICIÓN DE PERSONAL A DESARROLLO HUMANO</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form role="form" method="post">
                <div class="card-body">

                <div class="row">
                  <div class="form-group col-md-4 ">
                  <label for="ciudad"></label>
                    <select class="form-control" name="selectCiudad" id="selectCiudad" required="">
                    <option>Seleccione Ciudad/Municipio</option>
                      <option value="1">Bogotá</option>
                      <option value="2">Sopo</option>
                      <option value="2">Medellin</option>
                      <option value="3">Barranquilla</option>
                      <option value="4">Cartagena</option>
                    </select>
                    <small id="ciudadHelp" class="form-text text-muted text-center">Seleccione Ciudad/Municipio</small>
                  </div>
                  <div class="form-group col-md-4 ">
                    <label for="tipo_ingreso"></label>
                    <select class="form-control" name="selectTipo_ingreso" id="selectTipo_ingreso" required="">
                    <option>Seleccione el tipo de ingreso</option>
                      <option value="1">Nuevo</option>
                      <option value="2">Temporal a directo</option>
                      <option value="2">Reingreso</option>
                      <option value="3">Reemplazo</option>
                      <option value="4">Temporal</option>
                    </select>
                    <small id="tipo_ingresoHelp" class="form-text text-muted text-center">Seleccione el tipo de ingreso</small>
                  </div>
                  <div class="form-group col-md-4 ">
                    <label for="horario"></label>
                    <select class="form-control" name="selectHorario" id="selectHorario" required="">
                    <option>Seleccione el horario</option>
                      <option value="1">Rotativo Trabajara por turnos tendrá recargos y horas extra</option>
                      <option value="2">Administrativo Sin recargos ni horas extra</option>
                      <option value="2">Administrativo Operativo Siendo administrativo tendrá recargos y horas extra</option>
                    </select>
                    <small id="horarioHelp" class="form-text text-muted text-center">Seleccione el horario</small>
                  </div>
                </div>


                <div class="row">
                <div class="form-group col-md-4 ">
                    <label for="nombre_ceco"></label>
                    <select class="form-control" name="selectNombre_ceco" id="selectNombre_ceco" required="">
                    <option>Seleccione el centro de costo</option>
                      <option value="1">10101001 PENICILINICO PL1</option>
                      <option value="2">10101002 PENICILINICO ELU PL1</option>
                      <option value="2">10101003 MANO DE OBRA DIRECTA PL1</option>
                    </select>
                    <small id="nombre_cecoHelp" class="form-text text-muted text-center">Seleccione el Codigo del centro de costo</small>
                  </div>
                  <div class="form-group col-md-4 ">
                    <label for="area_personal"></label>
                    <select class="form-control" name="selectArea_personal" id="selectArea_personal" required="">
                    <option>Seleccione el Area de personal</option>
                      <option value=">directa">Mano de obra directa</option>
                      <option value="indirecta">Mano de obra indirecta</option>
                      <option value="administracion">Administración</option>
                      <option value="comercial">Comercial</option>
                    </select>
                    <small id="area_personalHelp" class="form-text text-muted text-center">Seleccione el Area de personal</small>
                  </div>
                  <div class="form-group col-md-4 ">
                    <label for="cargo_solicitado"></label>
                    <input type="text" class="form-control" name="selectCargo_solicitado" id="selectCargo_solicitado" placeholder="Cargo solicitado" required="">
                    <small id="cargo_solicitadoHelp" class="form-text text-muted text-center">Cargo solicitado</small>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-4 ">
                    <label for="motivo"></label>
                    <input type="text" class="form-control" name="selectMotivo" id="selectMotivo" placeholder="Motivo de la solicitud" required="">
                    <small id="motivoHelp" class="form-text text-muted text-center">Motivo de la solicitud</small>
                  </div>
                  <div class="form-group col-md-4 ">
                    <label for="formacion"></label>
                    <select class="form-control" name="selectFormacion" id="selectFormacion" placeholder="Formación academica" required="">
                    <option>Seleccione la formación academica</option>
                      <option value=">bachiller">Bachiller</option>
                      <option value="tecnico">Tecnico</option>
                      <option value="tecnologo">Tecnologo</option>
                      <option value="profesional">Profesional</option>
                      <option value="posgrado">Posgrado</option>
                      <option value="otros">Otros</option>
                    </select>
                    <small id="formacionHelp" class="form-text text-muted text-center">Seleccione la formación academica</small>
                  </div>
                  <div class="form-group col-md-4 ">
                    <label for="otra_formacion"></label>
                    <input type="text" class="form-control" name="selectOtraformacion" id="selectOtraformacion" placeholder="Otra formación academica">
                    <small id="otraHelp" class="form-text text-muted text-center">Formación adicional si aplica</small>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-4 ">
                    <label for="genero"></label>
                    <select class="form-control" name="selectFormacion" id="selectFormacion" required="">
                      <option>Seleccione el genero</option>
                      <option value=">masculino">Masculino</option>
                      <option value="femenino">Femenino</option>
                      <option value="indiferente">Indiferente</option>
                    </select>
                    <small id="generoHelp" class="form-text text-muted text-center">Seleccione el genero</small>
                  </div>
                  <div class="form-group col-md-4 ">
                    <label for="exp_lab"></label>
                    <select class="form-control" name="selectExp_lab" id="selectExp_lab" required="">
                      <option>Requiere experiencia laboral</option>
                      <option value=">si">Si</option>
                      <option value="no">No</option>
                    </select>
                    <small id="generoHelp" class="form-text text-muted text-center">Requiere experiencia laboral</small>
                  </div>
                  <div class="form-group col-md-4 ">
                    <label for="tiempo_exp"></label>
                    <input type="email" class="form-control" name="selectTiempo_exp" id="selectTiempo_exp" placeholder="Ejemplo: 12 Meses" required="">
                    <small id="tiempo_expHelp" class="form-text text-muted text-center">Tiempo de experiencia</small>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-8 ">
                    <label for="experiencia_en"></label>
                    <textarea class="form-control" rows="2" placeholder="Requiere experiencia en:"></textarea>
                    <small id="experiencia_enHelp" class="form-text text-muted text-center">"Requiere experiencia en</small>
                  </div>

                  <div class="form-group col-md-4 ">
                    <label for="ciudad_labor"></label>
                    <select class="form-control" name="selectCiudad_labor" id="selectCiudad_labor" required="">
                    <option>Ciudad/Municipio donde laborará</option>
                      <option value="1">Bogotá</option>
                      <option value="2">Sopo</option>
                      <option value="2">Medellin</option>
                      <option value="3">Barranquilla</option>
                      <option value="4">Cartagena</option>
                    </select>
                    <small id="ciudadHelp" class="form-text text-muted text-center">Ciudad/Municipio donde laborará</small>
                  </div>
                </div>

                <div class="row">
                <div class="form-group col-md-4 ">
                    <label for="tipo_salario"></label>
                    <select class="form-control" name="selectTipo_salario" id="selectTipo_salario" required="">
                    <option>Seleccione la asignación salarial</option>
                      <option value="smlv">Salario minimo legal vigente</option>
                      <option value="smi">Salario minimo integral</option>
                      <option value="smv">Salario minimo VITALIS S.A.C.I.</option>
                      <option value="monto_salario">Otro</option>
                    </select>
                    <small id="ciudadHelp" class="form-text text-muted text-center">Seleccione la asignación salarial</small>
                  </div>
                  <div class="form-group col-md-4 ">
                  <label for="tipo_contrato"></label>
                    <select class="form-control" name="selectTipo_contrato" id="selectTipo_contrato" required="">
                    <option>Seleccione el tipo de contrato</option>
                      <option value="fijo">Fijo a tres meses</option>
                      <option value="indefinido">Indefinido</option>
                      <option value="aprendizaje">Aprendizaje</option>
                      <option value="Otra_duración">Otra duración</option>
                    </select>
                    <small id="ciudadHelp" class="form-text text-muted text-center">Seleccione el tipo de contrato</small>
                  </div>
                  <div class="form-group col-md-4 ">
                  <label for="id_usuario"></label>
                    <input type="text" class="form-control" name="selectId_usuario" id="selectId_usuario" placeholder="Nombre del solicitante">
                    <small id="id_usuarioHelp" class="form-text text-muted text-center">Nombre del solicitante</small>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="observaciones"></label>
                    <textarea class="form-control" rows="2" placeholder="OBSERVACIONES"></textarea>
                  </div>
                </div>
                

              </div>
                <!-- /.card-body -->
                
              
             </div>
             <!-- /.card -->

             <!-- Input addon -->
              <div class="card card-primary">
                <div class="card-header" style="background:#20c997;">
                  <h3 class="card-title">HERRAMIENTAS TECNOLOGICAS</h3>
                </div>
                <div class="card-body">
                  
                    <div class="row">
                        <h4>PC</h4>
                        <div class="form-group col-md-4">
                          <input type="radio" name="pc" id="pc_Si">
                          <label for="pc_Si">SI</label>
                          <br>

                          <input type="radio" name="pc" id="pc_No">
                          <label for="pc_No">NO</label>                      
                        </div>

                      
                        <h4>Teléfono</h4>
                        <div class="form-group col-md-3">
                          <input type="radio" name="telefono" id="tel_Si">
                          <label for="tel_Si">SI</label>
                          <br>

                          <input type="radio" name="telefono" id="tel_No">
                          <label for="tel_No">NO</label>
                      </div>

                      
                        <h4>Correo</h4>
                        <div class="form-group col-md-2">
                          <input type="radio" name="correo" id="correoSi">
                          <label for="correoSi">SI</label>
                            <br>

                          <input type="radio" name="correo" id="correoNo">
                          <label for="correoNo">NO</label>
                      </div>
                    </div>

                    <div class="row">
                    <div class="form-group col-md-4">
                      <label for="observaciones"></label>
                      <textarea class="form-control" rows="2" placeholder="ESPECIFICACIONES PARA EL PC"></textarea>
                    </div>

                    <div class="form-group col-md-4">
                      <label for="observaciones"></label>
                      <textarea class="form-control" rows="2" placeholder="ESPECIFICACIONES PARA EL TELEFONO"></textarea>
                    </div>

                    <div class="form-group col-md-4">
                      <label for="observaciones"></label>
                      <textarea class="form-control" rows="2" placeholder="ESPECIFICACIONES PARA EL CORREO"></textarea>
                    </div>
                  </div>
  
                </div>
                <!-- /.card-body -->

                    <div class="card-footer text-center">
                      <button type="submit" class="btn btn-primary">Guardar solicitud</button>
                    </div>
             </form>
              </div>

            <!-- /.card -->
            <!-- Horizontal Form -->
            <!-- <div class="card card-primary">
              <div class="card-header" style="background:#20c997;">
                <h3 class="card-title">ESPACIO EXCLUSIVO PARA DESARROLLO HUMANO</h3>
              </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- /.card-body -->
                <!-- <div class="card-footer">
                  <button type="submit" class="btn btn-info">Sign in</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div> -->
                <!-- /.card-footer -->
              <!-- </form>
            </div> -->
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>