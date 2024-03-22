<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="info-box">
                    <form action="#" method="post">
                        <div class="card ">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class=" bg-aqua nav-link active" id="tab-1-tab" data-toggle="tab" href="#tab-1"
                                        role="tab" aria-controls="tab-1" aria-selected="true"><i
                                            class="fa fa-folder"></i> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="bg-aqua nav-link" id="tab-2-tab" data-toggle="tab" href="#tab-2"
                                        role="tab" aria-controls="tab-2" aria-selected="false"><i
                                            class="fa fa-users"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="bg-aqua nav-link" id="tab-3-tab" data-toggle="tab" href="#tab-3"
                                        role="tab" aria-controls="tab-3" aria-selected="false"><i
                                            class="fa fa-user"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="bg-aqua nav-link" id="tab-4-tab" data-toggle="tab" href="#tab-4"
                                        role="tab" aria-controls="tab-4" aria-selected="false"><i
                                            class="fa fa-exclamation-triangle"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="bg-aqua nav-link" id="tab-5-tab" data-toggle="tab" href="#tab-5"
                                        role="tab" aria-controls="tab-5" aria-selected="false"><i
                                            class="fa fa-user-md"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="bg-aqua nav-link" id="tab-6-tab" data-toggle="tab" href="#tab-6"
                                        role="tab" aria-controls="tab-6" aria-selected="false"><i
                                            class="fa fa-thermometer-full "></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="bg-aqua nav-link" id="tab-7-tab" data-toggle="tab" href="#tab-7"
                                        role="tab" aria-controls="tab-7" aria-selected="false"><i
                                            class="fa fa-flask"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="bg-aqua nav-link" id="tab-8-tab" data-toggle="tab" href="#tab-8"
                                        role="tab" aria-controls="tab-8" aria-selected="false"><i
                                            class="fa fa-file-o "></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="bg-aqua nav-link" id="tab-9-tab" data-toggle="tab" href="#tab-9"
                                        role="tab" aria-controls="tab-9" aria-selected="false"><i
                                            class="fa fa-file-text-o"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="bg-aqua nav-link" id="tab-10-tab" data-toggle="tab" href="#tab-10"
                                        role="tab" aria-controls="tab-10" aria-selected="false"><i
                                            class="fa fa-book"></i></a>
                                </li>
                                <!-- Repite este bloque para cada una de las 12 pestañas, cambiando el número de la pestaña en cada caso -->
                                <!-- ... -->
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <!-- Crear contenido para cada pestaña -->
                                <div class="tab-pane fade show active" id="tab-1" role="tabpanel"
                                    aria-labelledby="tab-1-tab">
                                    <div class="card-header bg-blue">
                                        <h6 class="text-white m-b-0">FICHA DE IDENTIFICACIÓN</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group has-feedback">
                                                    <input class="form-control" placeholder="Fecha" type="date"
                                                        value="<?php date_default_timezone_set('America/Bogota');  echo date('Y-m-d'); ?>"
                                                        readonly>
                                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group has-feedback">
                                                    <input class="form-control" placeholder="hora" type="time"
                                                        value="<?php date_default_timezone_set('America/Bogota');  echo date('H:i'); ?>"
                                                        readonly>
                                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group has-feedback">
                                                    <select class="form-control" placeholder="Servicio / Especialidad">
                                                        <option value="">Seleccione una especialidad</option>
                                                        <option value="Dermatología">Dermatología</option>
                                                        <option value="Endocrinología">Endocrinología</option>
                                                        <option value="Medicina_general">Medicina General</option>
                                                        <option value="Medicina_interna">Medicina Interna</option>
                                                        <option value="Pediatria">Pediatría</option>
                                                        <option value="Reuamtologia">Reumatología</option>
                                                    </select>
                                                    <span class="fa fa-stethoscope form-control-feedback"
                                                        aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group has-feedback">
                                                    <input class="form-control" placeholder="Nombres" type="text"
                                                        readonly>
                                                    <span class="fa fa-user form-control-feedback"
                                                        aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group has-feedback">
                                                    <input class="form-control" placeholder="Apellidos" type="text"
                                                        readonly>
                                                    <span class="fa fa-users form-control-feedback"
                                                        aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-2">
                                                <div class="form-group has-feedback">
                                                    <select class="form-control" placeholder="Genero" readonly>
                                                        <option value="">Selecciona el género</option>
                                                        <option value="masculino">Masculino</option>
                                                        <option value="femenino">Femenino</option>
                                                        <option value="no especifica">No especifica</option>
                                                    </select>
                                                    <span class="fa fa-venus-mars form-control-feedback"
                                                        aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group has-feedback">
                                                    <input class="form-control" placeholder="Representante 1"
                                                        type="text">
                                                    <span class="fa fa-user form-control-feedback"
                                                        aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group has-feedback">
                                                    <input class="form-control" placeholder="Representante 2"
                                                        type="text">
                                                    <span class="fa fa-user form-control-feedback"
                                                        aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group has-feedback">
                                                    <input class="form-control" placeholder="Dirección" type="text"
                                                        readonly>
                                                    <span class="fa fa-street-view form-control-feedback"
                                                        aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group has-feedback">
                                                    <input class="form-control" placeholder="Teléfono" type="text"
                                                        readonly>
                                                    <span class="fa fa-phone form-control-feedback"
                                                        aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group has-feedback">
                                                    <input class="form-control" placeholder="Correo Electrónico"
                                                        type="text" readonly>
                                                    <span class="fa fa-envelope-o form-control-feedback"
                                                        aria-hidden="true"></span> </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group has-feedback">
                                                    <select class="form-control" placeholder="Grupo Sanguíneo" readonly>
                                                        <option value="">Grupo Sanguíneo</option>
                                                        <option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>
                                                    </select>
                                                    <span class="fa fa-tint form-control-feedback"
                                                        aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group has-feedback">
                                                    <input class="form-control" placeholder="Contacto de emergencia"
                                                        type="text" readonly>
                                                    <span class="fa fa-users form-control-feedback"
                                                        aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group has-feedback">
                                                    <input class="form-control" placeholder="Teléfono emergencia"
                                                        type="text" readonly>
                                                    <span class="fa fa-phone form-control-feedback"
                                                        aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group has-feedback">
                                                    <input class="form-control"
                                                        placeholder="Teléfono alternativo emergencia" type="text"
                                                        readonly>
                                                    <span class="fa fa-phone form-control-feedback"
                                                        aria-hidden="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2-tab">
                                  
                                </div>
                                <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3-tab">
                                    <div class="card-header bg-blue">
                                        <h6 class="text-white m-b-0">ANTECEDENTES PATOLOGICOS PERSONALES</h6>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4-tab">
                                    <div class="card-header bg-blue">
                                        <h6 class="text-white m-b-0">ALERGIAS</h6>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="tab-5-tab">
                                    <div class="card-header bg-blue">
                                        <h6 class="text-white m-b-0">ENFERMEDAD ACTUAL</h6>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-6" role="tabpanel" aria-labelledby="tab-6-tab">
                                    <div class="card-header bg-blue">
                                        <h6 class="text-white m-b-0">EXAMEN FÍSICO</h6>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-7" role="tabpanel" aria-labelledby="tab-7-tab">
                                    <div class="card-header bg-blue">
                                        <h6 class="text-white m-b-0">EXAMENES DE LABORATORIO</h6>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-8" role="tabpanel" aria-labelledby="tab-8-tab">
                                    <div class="card-header bg-blue">
                                        <h6 class="text-white m-b-0">DIAGNOSTICO</h6>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-9" role="tabpanel" aria-labelledby="tab-9-tab">
                                    <div class="card-header bg-blue">
                                        <h6 class="text-white m-b-0">TRATAMIENTO</h6>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-10" role="tabpanel" aria-labelledby="tab-10-tab">
                                    <div class="card-header bg-blue">
                                        <h6 class="text-white m-b-0">RECOMENDACIONES</h6>
                                    </div>
                                </div>

                                <!-- Repite este bloque para cada una de las 12 pestañas, cambiando el número de la pestaña en cada caso -->
                                <!-- ... -->
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group has-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>
                                            GUARDAR</button>
                                        <a href="?m=pacientes" class="btn btn-danger"><i class="fa fa-times"></i></a>
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