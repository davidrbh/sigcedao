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
                  <input class="form-control valid validText" id="nombre_alumnoPre1" name="nombre_alumnoPre1" type="text" placeholder=""
                    required="">
                </div>

                <div class="form-group col-md-3">
                  <label class="control-label">Segundo Nombre (opcional):</label>
                  <input class="form-control valid validText" id="nombre_alumnoPre2" name="nombre_alumnoPre2" type="text" placeholder="">
                </div>

                <div class="form-group col-md-3">
                  <label class="control-label">Primer apellido:</label>
                  <input class="form-control valid validText" id="apellido_alumnoPre1" name="apellido_alumnoPre1" type="text" placeholder=""
                    required="">
                </div>

                <div class="form-group col-md-3">
                  <label class="control-label">Segundo apellido (opcional):</label>
                  <input class="form-control valid validText" id="apellido_alumnoPre2" name="apellido_alumnoPre2" type="text"
                    placeholder="">
                </div>

                <div class="form-group col-md-3">
                  <label for="cedula_escolarPre">Cédula de identidad o Escolar:</label>
                  <input type="text" class="form-control valid validNumber" id="cedula_escolarPre" name="cedula_escolarPre"
                    placeholder="" maxlength="8" required="">
                </div>

                <div class="form-group col-md-3">
                  <label for="fecha_nac_pre">Fecha de nacimiento:</label>
                  <input type="date" name="fecha_nac_pre" value="" class="form-control" id="fecha_nac_pre" step="1">
                </div>

                <div class="form-group col-md-3">
                  <label for="listGeneroPre">Género:</label>
                  <select class="form-control selectpicker " id="listGeneroPre" name="listGeneroPre" required>
                    <option value="">Seleccione</option>
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>
                  </select>
                </div>

                <div class="form-group col-md-3">
                  <label for="listNacionalidadPre">Nacionalidad:</label>
                  <select class="form-control selectpicker " id="listNacionalidadPre" name="listNacionalidadPre" required>
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
                  <input class="form-control valid" id="lugar_nacimientoPre" name="lugar_nacimientoPre" type="text" placeholder=""
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
                <label for="listHermanosPre">Tiene hermanos?</label>
                <select class="form-control selectpicker" id="listHermanosPre" name="listHermanosPre" required>
                <option value="">Seleccione</option>  
                <option value="Si">Si</option>
                  <option value="No">No</option>

                </select>
              </div>

              <div class="form-group col-md-3 pre-oculto" style="display: none;">
                  <label for="cuantos_hermanos">Cuantos hermanos?</label>
                  <input type="text" class="form-control valid validNumber" id="cuantos_hermanos" name="cuantos_hermanos"
                    placeholder="" value="" maxlength="1" >
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
                <input class="form-control valid validText" id="nombre_madrePre" name="nombre_madrePre" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-2">
                <label class="control-label">Apellido de la madre:</label>
                <input class="form-control valid validText" id="apellido_madrePre" name="apellido_madrePre" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-1">
                <label for="listNacionalidad_madrePre">Nacionalidad:</label>
                <select class="form-control selectpicker" id="listNacionalidad_madrePre" name="listNacionalidad_madrePre" required>
                <option value="">Seleccione</option>  
                <option value="V-">V-</option>
                  <option value="E-">E-</option>

                </select>
              </div>


              <div class="form-group col-md-2">
                <label for="cedula_madrePre">Cédula:</label>
                <input type="text" class="form-control valid validNumber" id="cedula_madrePre" name="cedula_madrePre" placeholder=""
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
                  <input class="form-control valid" id="lugar_nacimientoMadrePre" name="lugar_nacimientoMadrePre" type="text" placeholder=""
                    required="">
                </div>

                <div class="form-group col-md-3">
                  <label for="listNacionalidad_madre_Pre">Nacionalidad:</label>
                  <select class="form-control selectpicker " id="listNacionalidad_madrePre" name="listNacionalidad_madrePre" required>
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
                  <label for="fecha_nac_madrePre">Fecha de nacimiento:</label>
                  <input type="date" name="fecha_nac_madrePre" value="" class="form-control" id="fecha_nac_madrePre" step="1">
                </div>

                <div class="form-group col-md-5">
                  <label class="control-label">Dirección de Habitación:</label>
                  <input class="form-control valid" id="direccion_habitacion_madrePre" name="direccion_habitacion_madrePre" type="text"
                    placeholder="" required="">
                </div>

                <div class="form-group col-md-2">
                <label for="telefono_madrePre">Teléfono:</label>
                <input type="text" class="form-control valid validNumber" id="telefono_madrePre" name="telefono_madrePre"
                  required="">
              </div>

              <div class="form-group col-md-6">
                  <label class="control-label">Dirección de Trabajo:</label>
                  <input class="form-control valid" id="direccion_trabajo_madrePre" name="direccion_trabajo_madrePre" type="text"
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
                <input class="form-control valid validText" id="nombre_padrePre" name="nombre_padrePre" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-3">
                <label class="control-label">Apellido del padre:</label>
                <input class="form-control valid validText" id="apellido_padrePre" name="apellido_padrePre" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-2">
                <label for="listNacionalidad_padrePre">Nacionalidad:</label>
                <select class="form-control selectpicker" id="listNacionalidad_padrePre" name="listNacionalidad_padrePre" required>
                <option value="">Seleccione</option>  
                <option value="V-">V-</option>
                  <option value="E-">E-</option>

                </select>
              </div>


              <div class="form-group col-md-2">
                <label for="cedula_padrePre">Cédula:</label>
                <input type="text" class="form-control valid validNumber" id="cedula_padrePre" name="cedula_padrePre" placeholder=""
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
                  <input class="form-control valid" id="lugar_nacimientoPadrePre" name="lugar_nacimientoPadrePre" type="text" placeholder=""
                    required="">
                </div>

                <div class="form-group col-md-3">
                  <label for="direccion_habitacion_Padre_Pre">Nacionalidad:</label>
                  <select class="form-control selectpicker " id="direccion_habitacion_Padre_Pre" name="direccion_habitacion_Padre_Pre" required>
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
                  <label for="fecha_nac_padrePre">Fecha de nacimiento:</label>
                  <input type="date" name="fecha_nac_padrePre" value="" class="form-control" id="fecha_nac_padrePre" step="1">
                </div>

                <div class="form-group col-md-5">
                  <label class="control-label">Dirección de Habitación:</label>
                  <input class="form-control valid" id="direccion_habitacion_PadrePre" name="direccion_habitacion_PadrePre" type="text"
                    placeholder="" required="">
                </div>

                <div class="form-group col-md-2">
                <label for="telefono_padrePre">Teléfono:</label>
                <input type="text" class="form-control valid validNumber" id="telefono_padrePre" name="telefono_padrePre"
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

                <div class="form-group col-md-3 pre-oculto1" style="display: none;">
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
                <input class="form-control valid validText" id="persona_retirarlo" name="persona_retirarlo" type="text"
                  placeholder="Nombre completo" >
              </div>


              <div class="form-group col-md-2">
                <label for="listNacionalidad_retiro">Nacionalidad:</label>
                <select class="form-control selectpicker" id="listNacionalidad_retiro" name="listNacionalidad_retiro" required>
                <option value="">Seleccione</option>  
                <option value="V-">V-</option>
                  <option value="E-">E-</option>

                </select>
              </div>


              <div class="form-group col-md-3">
                <label for="cedula_retiro">Cédula:</label>
                <input type="text" class="form-control valid validNumber" id="cedula_retiro" name="cedula_retiro" placeholder=""
                  maxlength="8" required="">
              </div>

              <div class="form-group col-md-2">
                <label for="listParentescoPre">Parentesco con el Alumno:</label>
                <select class="form-control selectpicker " id="listParentescoPre" name="listParentescoPre" required>
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


            </div>
        
            </div>
            </div>
            </div>

            <div>
        <h3 class="titulo-modal">ANTECEDENTES DEL NACIMIENTO</h3>
      </div>
      <div class="modal-body">
        <div class="tile">
          <div class="tile-body">

            
            <p class="text-primary">Todos los campos son obligatorios.</p>

            <div class="form-row">

            <div class="form-group col-md-2">
                <label for="embarazo_pre_escolar">Situación del embarazo:</label>
                <select class="form-control selectpicker " id="embarazo_pre_escolar" name="embarazo_pre_escolar" required>
                  <option value="">Seleccione</option>
                  <option value="Normal">Normal</option>
                  <option value="Con problemas">Con problemas</option>
                  <option value="Planificado">Planificado</option>
                  <option value="No planificado">No planificado</option>
                 
                </select>
              </div>


              <div class="form-group col-md-5">
                <label class="control-label">Enfermedades o problemas durante el embarazo:</label>
                <input class="form-control valid" id="problema_embarazo" name="problema_embarazo" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-5">
                <label class="control-label">Oficio o trabajo realizado durante el embarazo:</label>
                <input class="form-control valid" id="oficio_embarazo" name="oficio_embarazo" type="text"
                  placeholder="" >
              </div>


              <div class="form-group col-md-3">
                <label for="parto_prescolar">Situación del nacimiento (parto):</label>
                <select class="form-control selectpicker " id="parto_prescolar" name="parto_prescolar" required>
                  <option value="">Seleccione</option>
                  <option value="Normal">Normal</option>
                  <option value="Cesaria">Cesária</option>
                  <option value="Forceps">Forceps</option>
                  <option value="Prematuro">Prematuro</option>


                </select>
              </div>

              <div class="form-group col-md-3">
                <label class="control-label">Edad de la madre durante el parto:</label>
                <input class="form-control valid validNumber" id="edad_embarazo" name="edad_embarazo" type="text"
                  placeholder="" maxlength="2" >
              </div>

                <div class="form-group col-md-4">
                  <label for="listProblema_parto">Problemas durante el parto?</label>
                  <select class="form-control selectpicker " id="listProblema_parto" name="listProblema_parto" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="form-group col-md-3 pre-oculto2" style="display: none;">
                <label class="control-label">Cuál?</label>
                <input class="form-control valid" id="cual_problema_parto" name="cual_problema_parto" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-2">
                <label for="peso_alnacer">Peso al nacer (KG):</label>
                <input type="text" class="form-control valid validNumber" id="peso_alnacer" name="peso_alnacer"
                  >
              </div>

              <div class="form-group col-md-2">
                <label for="talla_alnacer">Talla (CM):</label>
                <input type="text" class="form-control valid validNumber" id="talla_alnacer" name="talla_alnacer"
                  required="">
              </div>

              <div class="form-group col-md-4">
                  <label for="listProblema_nacimiento">Algun problema en los primeros dias de nacimiento?</label>
                  <select class="form-control selectpicker " id="listProblema_nacimiento" name="listProblema_nacimiento" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="form-group col-md-3 pre-oculto3" style="display: none;">
                <label class="control-label">Cuál?</label>
                <input class="form-control valid" id="cual_problema_parto" name="cual_problema_parto" type="text"
                  placeholder="" required="">
              </div>

              <div class="form-group col-md-3">
                <label for="comenzo_hablar">Edad que comenzo a hablar:</label>
                <input type="text" class="form-control valid validNumber" id="comenzo_hablar" name="comenzo_hablar"
                  >
              </div>

              <div class="form-group col-md-3">
                <label for="comenzo_caminar">Edad que comenzo a caminar:</label>
                <input type="text" class="form-control valid validNumber" id="comenzo_caminar" name="comenzo_caminar"
                  >
              </div>

              <div class="form-group col-md-3">
                <label for="dejo_panales">Edad que dejo de usar los pañales:</label>
                <input type="text" class="form-control valid validNumber" id="dejo_panales" name="dejo_panales"
                  >
              </div>

            

            </div>
        
            </div>
            </div>
            </div>

            <div>
        <h3 class="titulo-modal">CONDICIONES FISICAS Y DE SALUD DEL NIÑO(A)</h3>
      </div>
      <div class="modal-body">
        <div class="tile">
          <div class="tile-body">

            
            <p class="text-primary">Todos los campos son obligatorios.</p>

            <div class="form-row">

            <div class="form-group col-md-2">
                <label for="peso_nino">Peso (KG):</label>
                <input type="text" class="form-control valid validNumber" id="peso_nino" name="peso_nino"
                  >
              </div>

              <div class="form-group col-md-2">
                <label for="talla_nino">Talla (CM):</label>
                <input type="text" class="form-control valid validNumber" id="talla_nino" name="talla_nino"
                  >
              </div>


              <div class="form-group col-md-2">
                <label for="grupo_sanguineo">Grupo sanguineo:</label>
                <input type="text" class="form-control valid validNumber" id="grupo_sanguineo" name="grupo_sanguineo"
                  >
              </div>

           

                <div class="form-group col-md-3">
                  <label for="listAlergicoPre">Es alergico?</label>
                  <select class="form-control selectpicker " id="listAlergicoPre" name="listAlergicoPre" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="form-group col-md-3 pre-oculto4" style="display: none;">
                <label class="control-label">Especifique:</label>
                <input class="form-control valid" id="Especifique_alergico" name="Especifique_alergico" type="text"
                  placeholder="" >
              </div>

              <div class="form-group col-md-3">
                <label class="control-label">Enfermedades padecidas:</label>
                <input class="form-control valid" id="enfermeda_padecida_nino" name="enfermeda_padecida_nino" type="text"
                  placeholder="" >
              </div>


              <div class="form-group col-md-3">
                  <label for="listHospitalizado">Ha sido hospitalizado alguna vez?</label>
                  <select class="form-control selectpicker " id="listHospitalizado" name="listHospitalizado" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                  </select>
                </div>

              <div class="form-group col-md-3 pre-oculto5" style="display: none;">
                <label class="control-label">Causa:</label>
                <input class="form-control valid" id="alergico_causa" name="alergico_causa" type="text"
                  placeholder="" >
              </div>


              <div class="form-group col-md-4">
                <label class="control-label">En caso de fiebre alta, que medicamento le administra?</label>
                <input class="form-control valid" id="medicamento_fiebre" name="medicamento_fiebre" type="text"
                  placeholder="" >
              </div>


              <div class="form-group col-md-5">
                <label class="control-label">Padece de alguna discapacidad?</label>
                <div class="animated-checkbox">
                  <label>
                    <input type="checkbox" id="checkMotora" name="checkMotora" value="0"><span
                      class="label-text">Motora</span>
                  </label>
                  <label>
                    <input type="checkbox" id="checkCrecimiento" name="checkCrecimiento" value="0"><span
                      class="label-text">De crecimiento</span>
                  </label>
                  <label>
                    <input type="checkbox" id="checkAuditiva" name="checkAuditiva" value="0"><span
                      class="label-text">Auditiva</span>
                  </label>

                  <label>
                    <input type="checkbox" id="checkVisual" name="checkVisual" value="0"><span
                      class="label-text">Visual</span>
                  </label>
                  <label>
                    <input type="checkbox" id="checkOtra_discapacidad" name="checkOtra_discapacidad" value="0"><span
                      class="label-text">Otra</span>
                  </label>
                  </label>
                </div>
              </div>

              <div class="form-group col-md-5 pre-oculto6" style="display: none;">
                <label class="control-label">Especifique:</label>
                <input class="form-control valid validText" id="discapacidad_otra" value="" name="discapacidad_otra" type="text"
                  placeholder="">
              </div>

              <div class="form-group col-md-3">
                  <label for="listEspecialistas">Es atendido por especialitas?</label>
                  <select class="form-control selectpicker " id="listEspecialistas" name="listEspecialistas" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="form-group col-md-3 pre-oculto7" style="display: none;">
                <label class="control-label">Cuál?</label>
                <input class="form-control valid" id="especialista_cual" name="especialista_cual" type="text"
                  placeholder="" >
              </div>

                <div class="form-group col-md-3">
                  <label for="listProblema_lenguaje">Presento problemas en el lenguaje?</label>
                  <select class="form-control selectpicker " id="listProblema_lenguaje" name="listProblema_lenguaje" required>
                    <option value="">Seleccione</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                  </select>
                </div>

                <div class="form-group col-md-3">
                  <label for="listMano_frecuentemente">Mano que utiliza frecuentemente:</label>
                  <select class="form-control selectpicker " id="listMano_frecuentemente" name="listMano_frecuentemente" required>
                    <option value="">Seleccione</option>
                    <option value="Derecha">Derecha</option>
                    <option value="Izquierda">Izquierda</option>
                    <option value="Ambas">Ambas</option>
                  </select>
                </div>

              <div class="form-group col-md-3">
                <label class="control-label">Hora en que se acuesta:</label>
                <input class="form-control valid" id="tiempo_acuesta" name="tiempo_acuesta" type="text"
                  placeholder="" >
              </div>

              <div class="form-group col-md-3">
                <label class="control-label">Hora en que se levanta:</label>
                <input class="form-control valid " id="tiempo_selevanta" name="tiempo_selevanta" type="text"
                  placeholder="" >
              </div>

              <div class="form-group col-md-2">
                  <label for="listsueno_nino">Sueño del niño(a):</label>
                  <select class="form-control selectpicker " id="listsueno_nino" name="listsueno_nino" required>
                    <option value="">Seleccione</option>
                    <option value="Tranquilo">Tranquilo</option>
                    <option value="Agitado">Agitado</option>
                    <option value="Imsomne">Imsomne</option>
                    <option value="Pesadilla">Pesadilla</option>
                    <option value="Despierta constantemente">Despierta constantemente</option>
                  </select>
                </div>

              <div class="form-group col-md-2">
                <label class="control-label">Con quién duerme el niño?</label>
                <input class="form-control valid " id="duerme_nino" name="duerme_nino" type="text"
                  placeholder="" >
              </div>

              <div class="form-group col-md-5">
                <label class="control-label">Otra informacion que desee suministrar y deba suministrar:</label>
                <input class="form-control valid " id="informacion_sumisnitrar" name="informacion_sumisnitrar" type="text"
                  placeholder="" >
              </div>


              <div class="form-group col-md-3">
                <label for="exampleSelect1">Status:</label>
                <select class="form-control selectpicker" id="listStatus2" name="listStatus2" required="">
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

            </div>
            </div>
            </div>
          

</form>

          </div>
        </div>

      </div>



    </div>

  </div>
</div>