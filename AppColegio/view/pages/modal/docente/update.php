<!--modal respuesta registro de usuario exitoso-->
<div class="modal fade" id="dataUpdateDC" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <form id="formulario_modificar_docente">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="text-center text-muted modal-title">Modificar :</h2>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="box-body">
                                <div class="form-group">
                                    <label class="control-label" for="txtFregistro">Fech. Registro</label>
                                    <input type="text" class="form-control" id="txtFregistrodc" name="txtFregistro" placeholder="Nombre" readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="txtCodigoDocente">Codigo</label>
                                    <input type="text" class="form-control" id="txtCodigoDocentedc" name="txtCodigoDocente" value="DOC-0" readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <div id="respuesta_crear_doc_codigo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txtDni">Documento de identidad</label>
                                    <input type="text" class="form-control" id="txtDnidc" name="txtDni" placeholder="Documento de identidad" REQUIRED>
                                </div>
                                <div class="form-group">
                                    <div id="respuesta_crear_doc_dni">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txtNombre">Nombre</label>
                                    <input type="text" class="form-control" id="txtNombredc" name="txtNombre" placeholder="Nombres" REQUIRED>
                                </div>
                                <div class="form-group">
                                    <label for="txtApaterno">Apellido Paterno</label>
                                    <input type="text" class="form-control" id="txtApaternodc" name="txtApaterno" placeholder="Apellido Paterno" REQUIRED>
                                </div>
                                <div class="form-group">
                                    <label for="txtAmaterno">Apellido Materno</label>
                                    <input type="text" class="form-control" id="txtAmaternodc" name="txtAmaterno" placeholder="Apellido Materno" REQUIRED>
                                </div>
                                <div class="form-group">
                                    <label >Sexo</label><br>
                                    <label>
                                        <input type="radio" name="sexo" value="M" id="chekSexoMdc" class="minimal" checked="checked">&nbsp;&nbsp; Maculino &nbsp;&nbsp;
                                    </label>
                                    <label>
                                        <input type="radio" name="sexo" value="F" id="chekSexoFdc" class="minimal" >&nbsp;&nbsp; Femenino
                                    </label>

                                </div>
                                <div class="form-group">
                                    <label for="txtEmail">Email</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="txtEmaildc" name="txtEmail" placeholder="Correo electronico" value=" @ " REQUIRED>
                                        <span class="input-group-addon" id="basic-addon2">@example.com</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txtTelefono">Telefono</label>
                                    <input type="text" maxlength="15"  class="form-control" id="txtTelefonodc" name="txtTelefono" placeholder="Telfono fijo" value=" - " REQUIRED>
                                </div>
                                <div class="form-group">
                                    <div id="respuesta_crear_usu_ex">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txtCelular">Celular</label>
                                    <input type="text"  maxlength="15" class="form-control" id="txtCelulardc" name="txtCelular" placeholder="Celular" value=" - " REQUIRED>
                                </div>
                                <div class="form-group">
                                    <div id="respuesta_crear_doc_si">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txtEstadoDocente">Estado del Docente</label>
                                    <select class="form-control" name="txtEstado" id="txtEstadodc" >
                                        <option value="1" >Activo</option>
                                        <option value="0" >Desactivado</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div id="respuesta_modificar_dc">
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-lg btn-primary pull-righ">Guardar</button>

                </div>

            </div>
        </div>
    </form>
</div>

