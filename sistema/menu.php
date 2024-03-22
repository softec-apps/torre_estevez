<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
  <!-- Main Nav -->
  <div class="main-nav">
    <nav> 
      <!-- Menu Toggle btn-->
      <div class="menu-toggle">
        <h3>Menu</h3>
        <button type="button" id="menu-btn"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <!-- Responsive Menu Structure--> 
      <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
      <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
        <li class="active"> <a href="?m=inicio"><i class="fa fa-dashboard"></i> <span>Inicio</span></a> </li>
      <li><a href="#"><i class="fa fa-users"></i> <span>Pacientes</span></a>
          <ul>
          <li><a href="?m=pacientes"><i class="fa fa-users"></i>Lista de pacientes</a></li> 
          <li><a href="?m=crear_paciente"><i class="fa fa-plus"></i>Registrar paciente</a></li>
          <li><a href="?m=historias_general"><i class="fa fa-plus"></i>Historia General</a></li>
          <li><a href="?m=historias_pediatricas"><i class="fa fa-plus"></i>Historia Pediatrica</a></li>
          <li><a href="?m=crear_hclinica"><i class="fa fa-plus"></i>Crear HC</a></li>
          <li><a href="?m=crear_hpediatrica"><i class="fa fa-plus"></i>Crear HP</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-flask "></i> <span>Laboratorio</span></a>
          <ul>
            <li><a href="?m=lista_ordenes"><i class="fa fa-users"></i>Lista de ordenes</a></li>
            <li><a href="?m=crear_orden"><i class="fa fa-plus"></i>Nueva orden</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-calendar"></i> <span>Turnos</span></a>
          <ul>
            <li><a href="?m=calendario"><i class="fa fa-users"></i>Calendario</a></li>
            <li><a href="?m=crear_turno"><i class="fa fa-plus"></i>Nuevo turno</a></li>
          </ul>
        </li>
        <li><a href="?m=logout"><i class="fa fa-sign-out "></i> <span>Salir</span></a></li>
      </ul>
    </nav>
  </div>
  <!-- Main Nav --> 