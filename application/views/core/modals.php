<!--     REGISTRO     -->  
          <div class="modal fade bs-example-modal-lg" id="registrate" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default" id="pfis">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-user"></span> <strong>REGISTRO</strong>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="panel-body">
                          <div class="copp">
                            <div id="eAlumno" class="row">
                                <form id="data_basic" class="form-horizontal" role="form" method="post">
                                  <div class="form-group pos">
                                    <p class="col-sm-12 texto">
                                      Proporciona tu número de cuenta, y nombre completo sin acentos para corroborar que eres alumnos de esta división, ya que este sistema solo contiene la informacion pertinente para las ingenierías civil y geomática.
                                    </p>
                                  </div>
                                  <div class="form-group pos">
                                    <label class="col-sm-1 control-label texto">Número</label>
                                      <div class="col-sm-2 entrada">
                                          <input type="text" class="form-control" name="ncuenta" id="ncuenta" placeholder="Cuenta" min="1" minlength="5" maxlength="15" onkeypress="return vnum(event);" required>
                                      </div>
                                      <label class="col-sm-1 control-label texto">Nombre</label>
                                        <div class="col-sm-2 entrada">
                                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre(s)" minlength="3" maxlength="30" onkeypress="return vcad(event);" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                                        </div>
                                      <label class="col-sm-1 control-label texto">Apellido</label>
                                      <div class="col-sm-2 entrada">
                                          <input type="text" class="form-control" name="apaterno" id="apaterno" placeholder="Paterno" minlength="3" maxlength="20" onkeypress="return vcad(event);" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                                      </div>
                                      <label class="col-sm-1 control-label texto">Apellido</label>
                                      <div class="col-sm-2 entrada">
                                          <input type="text" class="form-control" name="amaterno" id="amaterno" placeholder="Materno" minlength="3" maxlength="20" onkeypress="return vcad(event);" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                                      </div>
                                  </div>
                                </form>
                                <div class="form-group text-center">
                        <a href="" data-toggle="modal" onclick="close_modal_re();">Casos especiales</a>
                      </div>
                                <div class="form-group last">
                                  <div class="pull-right">
                                      <button type="submit" class="btn btn-labeled btn-info btn-sm"()">
                                        <!--glyphicon glyphicon-send-->
                                       <span class="btn-label"><i class="glyphicon glyphicon-log-in"></i></span>Enviar
                                    </button>
                                    <button type="reset" class="btn btn-labeled btn-success btn-sm">
                                        <span class="btn-label"><i class="glyphicon glyphicon-erase"></i></span>Borrar
                                    </button>
                                  </div>
                              </div>
                              </div>
                              <div id="dimp"></div>
                              <div id="seAlumno" class="row espcheck"></div>
                          </div>
                        </div>
                        <div class="panel-footer">
                          <div id="spincont">
                                <div class="progress progress-striped active" id="barraspin_reg">
                                    <div class="progress-bar progress-bar-default"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

<!--     INICIAR SESION  -->
          <div class="modal fade bs-example-modal-sm" id="isesion" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
          <div class="row">
                <div class="col-md-4" id="pfis">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-lock"></span> <strong>ACCESO</strong> 
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="panel-body">
                          <span>Por favor introduce tu usuario (user) y tu contraseña (password) para acceder al SITT</span>
                            <form id="isFormulario"class="form-horizontal" role="form" method="post">
                              <br>
                              <div class="form-group">
                                  <label for="iuser" class="col-sm-3 control-label">Usuario</label>
                                  <div class="col-sm-9">
                                      <input type="text" class="form-control" id="iuser" placeholder="User" name="iuser"/>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="ipass" class="col-sm-3 control-label">Contraseña</label>
                                  <div class="col-sm-9">
                                      <input type="password" class="form-control" id="ipass" placeholder="Password" name="ipass"/>
                                  </div>
                              </div>
                              <div class="form-group text-center">
                    <a href="" data-toggle="modal" onclick="close_modal_is();">¿Olvidaste tu contraseña?</a>
                  </div>
                              <div class="form-group last">
                              <div class="pull-right">
                                  <button onclick="Formulario1();" class="btn btn-labeled btn-primary btn-sm" >
                                      <span class="btn-label"><i class="glyphicon glyphicon-log-in"></i></span> Enviar
                                  </button>
                                  <button type="reset" class="btn btn-labeled btn-success btn1 btn-sm">
                                      <span class="btn-label"><i class="glyphicon glyphicon-erase"></i></span> Borrar
                                  </button>
                              </div>
                          </div> 
                          </form> 
                          
                          
                        </div>
                        <div class="panel-footer">
                          <div id="spincont">
                                <div class="progress progress-striped active" id="barraspin_is">
                                    <div class="progress-bar progress-bar-default"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    </div>
                                </div>
                            </div> 
                        </div>
                  </div>
              </div>
          </div>
          </div>  

<!--     OLVIDE MI CONTRASEÑA  -->
          <div class="modal fade bs-example-modal-md" id="contrasenia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
          <div class="row">
              <div class="col-md-4 col-md-offset-4">
                  <div class="panel panel-default" id="pfis">
                      <div class="panel-heading">
                          <span class="glyphicon glyphicon-send"></span> <strong>CONTRASEÑA</strong> 
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="panel-body">
                          <span>Por favor introduce tu número de cuenta ya que esta vinculado con el correo que registraste anteriormente</span>
                          <form class="form-horizontal" role="form">
                            <br>
                            <div class="form-group">
                                <label for="ipass" class="col-sm-3 control-label">Número</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ipass" placeholder="Cuenta" onkeypress="return vnum(event);" required>
                                </div>
                            </div>    
                          </form>
                  <div class="form-group last">
                              <div class="pull-right">
                                  <button type="submit" class="btn btn-labeled btn-info btn-sm" onclick="contrasenia();">
                                      <span class="btn-label"><i class="glyphicon glyphicon-send"></i></span>Enviar
                                  </button>
                                  <button type="reset" class="btn btn-labeled btn-success btn-sm">
                                      <span class="btn-label"><i class="glyphicon glyphicon-erase"></i></span>Borrar
                                  </button>
                              </div>
                          </div>
                      </div>
                      <div class="panel-footer">
                           <div id="spincont">
                                <div class="progress progress-striped active" id="barraspin">
                                    <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>