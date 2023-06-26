<!-- Modal -->
<div class="modal fade" id="modalFormPre-escolar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo estudiante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div>
        <h3 class="titulo-modal">DATOS DEL NIÑO(A)</h3>
      </div>
      <form id="formPre-escolar" name="formPre-escolar" class="form-horizontal">
      <div class="modal-body">
        <div class="tile">
          <div class="tile-body">
            
              <input type="hidden" id="idPre-escolar" name="idPre-escolar" value="">
              <p class="text-primary">Todos los campos son obligatorios.</p>



              <div class="form-row">


                <div class="form-group col-md-3">
                  <label class="control-label">Primer nombre:</label>
                  <input class="form-control valid validText" id="nombre_alumno1" name="nombre_alumno1" type="text" placeholder=""
                    required="">
                </div>

                <div class="form-group col-md-3">
                  <label class="control-label">Segundo Nombre (opcional):</label>
                  <input class="form-control valid validText" id="nombre_alumno2" name="nombre_alumno2" type="text" placeholder="">
                </div>

                <div class="form-group col-md-3">
                  <label class="control-label">Primer apellido:</label>
                  <input class="form-control valid validText" id="apellido_alumno1" name="apellido_alumno1" type="text" placeholder=""
                    required="">
                </div>

                <div class="form-group col-md-3">
                  <label class="control-label">Segundo apellido (opcional):</label>
                  <input class="form-control valid validText" id="apellido_alumno2" name="apellido_alumno2" type="text"
                    placeholder="">
                </div>

                <div class="form-group col-md-3">
                  <label for="cedula_escolar">Cédula de identidad o Escolar:</label>
                  <input type="text" class="form-control valid validNumber" id="cedula_escolar" name="cedula_escolar"
                    placeholder="" maxlength="8" required="">
                </div>

                <div class="form-group col-md-3">
                  <label for="fecha_nac">Fecha de nacimiento:</label>
                  <input type="date" name="fecha_nac" value="" class="form-control" id="fecha_nac" step="1">
                </div>

                <div class="form-group col-md-3">
                  <label for="listGenero">Género:</label>
                  <select class="form-control selectpicker " id="listGenero" name="listGenero" required>
                    <option value="">Seleccione</option>
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>
                  </select>
                </div>

                <div class="form-group col-md-3">
                  <label for="listNacionalidad">Nacionalidad:</label>
                  <select class="form-control selectpicker " id="listNacionalidad" name="listNacionalidad" required>
                    <option value="">Seleccione</option>
                    <option value="1">Venezolana</option>
                    <option value="2">Extranjera</option>
                  </select>
                </div>

               


                <div class="form-group col-md-3">
                  <label for="selectEstadoid2">Entidad federal:</label>
                  <select class="form-control  " data-live-search="true" id="selectEstadoid2" name="selectEstadoid2"
                   >


                  </select>
                </div>

                

                <div class="form-group col-md-3">
                  <label class="control-label">Lugar de nacimiento:</label>
                  <input class="form-control valid" id="lugar_nacimiento" name="lugar_nacimiento" type="text" placeholder=""
                    required="">
                </div>



                <div class="form-group col-md-3">
                  <label for="listTalla_camisa">Talla de camisa:</label>
                  <select class="form-control selectpicker " id="listTalla_camisa" name="listTalla_camisa" required>
                    <option value="">Seleccione</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                  </select>
                </div>

                <div class="form-group col-md-3">
                  <label for="listTalla_pantalon">Talla de pantalón:</label>
                  <select class="form-control selectpicker " id="listTalla_pantalon" name="listTalla_pantalon" required>
                    <option value="">Seleccione</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                  </select>
                </div>

                <div class="form-group col-md-3">
                  <label for="listTalla_zapato">Talla de zapato:</label>
                  <select class="form-control selectpicker " id="listTalla_zapato" name="listTalla_zapato" required>
                    <option value="">Seleccione</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                    <option value="32">32</option>
                  </select>
                </div>

                <div class="form-group col-md-2">
                <label for="peso">Peso (KG):</label>
                <input type="text" class="form-control valid validNumber" id="peso" name="peso"
                  required="">
              </div>

              <div class="form-group col-md-2">
                <label for="estatura">Estatura (Metro):</label>
                <input type="text" class="form-control valid validNumber" id="estatura" name="estatura"
                  required="">
              </div>

              <div class="form-group col-md-2">
                <label for="listHermanos">Tiene hermanos?</label>
                <select class="form-control selectpicker" id="listHermanos" name="listHermanos" required>
                <option value="">Seleccione</option>  
                <option value="Si">Si</option>
                  <option value="No">No</option>

                </select>
              </div>

              <div class="form-group col-md-3">
                  <label for="cuantos_hermanos">Cuantos hermanos?</label>
                  <input type="text" class="form-control valid validNumber" id="cuantos_hermanos" name="cuantos_hermanos"
                    placeholder="" maxlength="1" >
                </div>





              </div>

          </div>
        </div>

      </div>

      <div>
        <h3 class="titulo-modal">DATOS FAMILIARES</h3>
      </div>
      <div class="modal-body">
        <div class="tile">
          <div class="tile-body">

            
            <p class="text-primary">Todos los campos son obligatorios.</p>

            <div class="form-row">



              <div class="form-group col-md-2">
                <label class="control-label">Nombre de la madre:</label>
                <input class="form-control valid validText" id="nombre_madre" name="nombre_madre" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-2">
                <label class="control-label">Apellido de la madre:</label>
                <input class="form-control valid validText" id="apellido_madre" name="apellido_madre" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-1">
                <label for="listNacionalidad_madre">Nacionalidad:</label>
                <select class="form-control selectpicker" id="listNacionalidad_madre" name="listNacionalidad_madre" required>
                <option value="">Seleccione</option>  
                <option value="V-">V-</option>
                  <option value="E-">E-</option>

                </select>
              </div>


              <div class="form-group col-md-2">
                <label for="cedula_madre">Cédula:</label>
                <input type="text" class="form-control valid validNumber" id="cedula_madre" name="cedula_madre" placeholder=""
                  maxlength="8" required="">
              </div>

              <div class="form-group col-md-2">
                <label for="listEstado_civil_madre">Estado Civil:</label>
                <select class="form-control selectpicker" id="listEstado_civil_madre" name="listEstado_civil_madre" required>
                <option value="">Seleccione</option>
                <option value="Soltera">Soltera</option>
                  <option value="Casada">Casada</option>
                  <option value="Viuda">Viuda</option>

                </select>
              </div>

              <div class="form-group col-md-3">
                  <label class="control-label">Lugar de nacimiento:</label>
                  <input class="form-control valid" id="lugar_nacimientoMadre" name="lugar_nacimientoMadre" type="text" placeholder=""
                    required="">
                </div>

                <div class="form-group col-md-3">
                  <label for="listNacionalidad_madre">Nacionalidad:</label>
                  <select class="form-control selectpicker " id="listNacionalidad_madre" name="listNacionalidad_madre" required>
                    <option value="">Seleccione</option>
                    <option value="1">Venezolana</option>
                    <option value="2">Extranjera</option>
                  </select>
                </div>

               


                <div class="form-group col-md-2">
                  <label for="selectEstadoid3">Entidad federal:</label>
                  <select class="form-control  " data-live-search="true" id="selectEstadoid3" name="selectEstadoid3"
                    required="">


                  </select>
                </div>

                <div class="form-group col-md-2">
                  <label for="fecha_nac_madre">Fecha de nacimiento:</label>
                  <input type="date" name="fecha_nac_madre" value="" class="form-control" id="fecha_nac_madre" step="1">
                </div>

                <div class="form-group col-md-5">
                  <label class="control-label">Dirección de Habitación:</label>
                  <input class="form-control valid" id="direccion_habitacion_madre" name="direccion_habitacion_madre" type="text"
                    placeholder="" required="">
                </div>

                <div class="form-group col-md-2">
                <label for="telefono_madre">Teléfono:</label>
                <input type="text" class="form-control valid validNumber" id="telefono_madre" name="telefono_madre"
                  required="">
              </div>

              <div class="form-group col-md-6">
                  <label class="control-label">Dirección de Trabajo:</label>
                  <input class="form-control valid" id="direccion_trabajo_madre" name="direccion_trabajo_madre" type="text"
                    placeholder="" >
                </div>

                <div class="form-group col-md-2">
                <label for="telefono_madre_trabajo">Teléfono del trabajo:</label>
                <input type="text" class="form-control valid validNumber" id="telefono_madre_trabajo" name="telefono_madre_trabajo"
                  >
              </div>

              <div class="form-group col-md-2">
                <label for="listNivel_academico_madre">Nivel académico:</label>
                <select class="form-control selectpicker" id="listNivel_academico_madre" name="listNivel_academico_madre" required>
                <option value="">Seleccione</option>  
                <option value="Primaria">Primaria</option>
                  <option value="Bachiller">Bachiller</option>
                  <option value="Tecnico-medio">Tecnico-medio</option>
                  <option value="Universitario">Universitario</option>

                </select>
              </div>


              <div class="form-group col-md-12">
                  <label class="control-label">Otros datos de importacia sobre la Situación familiar que desee reflejar:</label>
                  <input class="form-control valid" id="otrosDatos_madre" name="otrosDatos_madre" type="text"
                    placeholder="" >
                </div>


                <div class="form-group col-md-3">
                <label class="control-label">Nombre del padre:</label>
                <input class="form-control valid validText" id="nombre_padre" name="nombre_padre" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-3">
                <label class="control-label">Apellido del padre:</label>
                <input class="form-control valid validText" id="apellido_padre" name="apellido_padre" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-2">
                <label for="listNacionalidad_padre">Nacionalidad:</label>
                <select class="form-control selectpicker" id="listNacionalidad_padre" name="listNacionalidad_padre" required>
                <option value="">Seleccione</option>  
                <option value="V-">V-</option>
                  <option value="E-">E-</option>

                </select>
              </div>


              <div class="form-group col-md-2">
                <label for="cedula_padre">Cédula:</label>
                <input type="text" class="form-control valid validNumber" id="cedula_padre" name="cedula_padre" placeholder=""
                  maxlength="8" required="">
              </div>

              <div class="form-group col-md-2">
                <label for="listEstado_civil_padre">Estado Civil:</label>
                <select class="form-control selectpicker" id="listEstado_civil_padre" name="listEstado_civil_padre" required>
                <option value="">Seleccione</option>  
                <option value="Soltera">Soltero</option>
                  <option value="Casada">Casado</option>
                  <option value="Viuda">Viudo</option>

                </select>
              </div>

              <div class="form-group col-md-5">
                  <label class="control-label">Lugar de nacimiento:</label>
                  <input class="form-control valid" id="lugar_nacimientoPadre" name="lugar_nacimientoPadre" type="text" placeholder=""
                    required="">
                </div>

                <div class="form-group col-md-3">
                  <label for="listNacionalidad_padre">Nacionalidad:</label>
                  <select class="form-control selectpicker " id="listNacionalidad_padre" name="listNacionalidad_padre" required>
                    <option value="">Seleccione</option>
                    <option value="1">Venezolana</option>
                    <option value="2">Extranjera</option>
                  </select>
                </div>

               


                <div class="form-group col-md-2">
                  <label for="selectEstadoid4">Entidad federal:</label>
                  <select class="form-control  " data-live-search="true" id="selectEstadoid4" name="selectEstadoid4"
                    required="">


                  </select>
                </div>

                <div class="form-group col-md-2">
                  <label for="fecha_nac_padre">Fecha de nacimiento:</label>
                  <input type="date" name="fecha_nac_padre" value="" class="form-control" id="fecha_nac_padre" step="1">
                </div>

                <div class="form-group col-md-5">
                  <label class="control-label">Dirección de Habitación:</label>
                  <input class="form-control valid" id="direccion_habitacion_Padre" name="direccion_habitacion_Padre" type="text"
                    placeholder="" required="">
                </div>

                <div class="form-group col-md-2">
                <label for="telefono_padre">Teléfono:</label>
                <input type="text" class="form-control valid validNumber" id="telefono_padre" name="telefono_padre"
                  required="">
              </div>

              <div class="form-group col-md-5">
                  <label class="control-label">Dirección de Trabajo:</label>
                  <input class="form-control valid" id="direccion_trabajo_padre" name="direccion_trabajo_padre" type="text"
                     >
                </div>

                <div class="form-group col-md-2">
                <label for="telefono_padre_trabajo">Teléfono del trabajo:</label>
                <input type="text" class="form-control valid validNumber" id="telefono_padre_trabajo" name="telefono_padre_trabajo"
                  >
              </div>

              <div class="form-group col-md-2">
                <label for="listNivel_academico_padre">Nivel académico:</label>
                <select class="form-control selectpicker" id="listNivel_academico_padre" name="listNivel_academico_padre" required>
                <option value="">Seleccione</option>  
                <option value="Educación primaria">Educación primaria</option>
                  <option value="Educación media">Educación media</option>
                  <option value="Educación tecnico-medio">Educación tecnico-medio</option>
                  <option value="Educación universitaria">Educación universitaria</option>

                </select>
              </div>


              <div class="form-group col-md-8">
                  <label class="control-label">Otros datos de importacia sobre la Situación familiar que desee reflejar:</label>
                  <input class="form-control valid" id="otrosDatos_padre" name="otrosDatos_padre" type="text"
                    placeholder="" >
                </div>


            </div>


          </div>
        </div>

      </div>

      <div>
        <h3 class="titulo-modal">INFORMACIÓN IMPORTANTE DEL NIÑO(A)</h3>
      </div>
      <div class="modal-body">
        <div class="tile">
          <div class="tile-body">

            
            <p class="text-primary">Todos los campos son obligatorios.</p>

            <div class="form-row">

            <div class="form-group col-md-3">
                  <label for="listCome_solo">Come solo?</label>
                  <select class="form-control selectpicker " id="listCome_solo" name="listCome_solo" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="form-group col-md-3">
                  <label for="listLo_ayudan">Lo ayudan?</label>
                  <select class="form-control selectpicker " id="listLo_ayudan" name="listLo_ayudan" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="form-group col-md-3">
                <label class="control-label">Quién?</label>
                <input class="form-control valid" id="quien_loayuda" name="quien_loayuda" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-3">
                <label class="control-label">Qué comida prefiere?</label>
                <input class="form-control valid" id="comida_prefiere" name="comida_prefiere" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-3">
                <label class="control-label">Cuales rechaza?</label>
                <input class="form-control valid" id="comida_rechaza" name="comida_rechaza" type="text"
                  placeholder="" required="">
              </div>


              <div class="form-group col-md-4">
                <label class="control-label">Alimentos prohibidos por inscripción médica</label>
                <input class="form-control valid" id="alimentos_prohibidos" name="alimentos_prohibidos" type="text"
                  placeholder="" >
              </div>

              <div class="form-group col-md-2">
                  <label for="listEsfinteres">Controla esfinteres?</label>
                  <select class="form-control selectpicker " id="listEsfinteres" name="listEsfinteres" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="form-group col-md-3">
                  <label for="listAsea_solo">Se asea por si solo?</label>
                  <select class="form-control selectpicker " id="listAsea_solo" name="listAsea_solo" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="form-group col-md-3">
                <label class="control-label">Cuantas horas duerme?</label>
                <input class="form-control valid validNumber" id="horas_dormidas" name="horas_dormidas" type="text"
                  placeholder="" >
              </div>

              <div class="form-group col-md-3">
                <label class="control-label">Qué tiempo le dedica la madre?</label>
                <input class="form-control valid " id="tiempo_dedica_madre" name="tiempo_dedica_madre" type="text"
                  placeholder="" >
              </div>

              <div class="form-group col-md-3">
                <label class="control-label">Qué tiempo le dedica el padre?</label>
                <input class="form-control valid " id="tiempo_dedica_padre" name="tiempo_dedica_padre" type="text"
                  placeholder="" >
              </div>

              <div class="form-group col-md-3">
                <label class="control-label">Qué tiempo le dedica los abuelos?</label>
                <input class="form-control valid " id="tiempo_dedica_abuelo" name="tiempo_dedica_abuelo" type="text"
                  placeholder="" >
              </div>

              <div class="form-group col-md-5">
                <label class="control-label">Nombre de las personas autorizadas para retirarlo de la escuela:</label>
                <input class="form-control valid " id="persona_retirarlo" name="persona_retirarlo" type="text"
                  placeholder="Nombre completo" >
              </div>


              <div class="form-group col-md-1">
                <label for="listNacionalidad_retiro">Nacionalidad:</label>
                <select class="form-control selectpicker" id="listNacionalidad_retiro" name="listNacionalidad_retiro" required>
                <option value="">Seleccione</option>  
                <option value="V-">V-</option>
                  <option value="E-">E-</option>

                </select>
              </div>


              <div class="form-group col-md-2">
                <label for="cedula_retiro">Cédula:</label>
                <input type="text" class="form-control valid validNumber" id="cedula_retiro" name="cedula_retiro" placeholder=""
                  maxlength="8" required="">
              </div>

              <div class="form-group col-md-2">
                <label for="listParentesco">Parentesco con el Alumno:</label>
                <select class="form-control selectpicker " id="listParentesco" name="listParentesco" required>
                  <option value="">Seleccione</option>
                  <option value="Padre">Padre</option>
                  <option value="Madre">Madre</option>
                  <option value="Abuela">Abuela</option>
                  <option value="Abuelo">Abuelo</option>
                  <option value="Hermano">Hermano</option>
                  <option value="Hermana">Hermana</option>
                  <option value="Tio">Tio</option>
                  <option value="Tia">Tia</option>
                </select>
              </div>



              <div class="form-group col-md-2">
                <label for="exampleSelect1">Status:</label>
                <select class="form-control selectpicker" id="listStatus" name="listStatus" required="">
                  <option value="1">Activo</option>
                  <option value="2">Inactivo</option>
                </select>
              </div>

            </div>
            <div class="tile-footer">
              <button id="btnActionForm" class="btn btn-primary" type="submit"><i
                  class="fa fa-fw fa-lg fa-check-circle"></i><span
                  id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;

              <button class="btn btn-danger" type="button" data-dismiss="modal"><i
                  class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>

            </div>

</form>

          </div>
        </div>

      </div>



    </div>

  </div>
</div>