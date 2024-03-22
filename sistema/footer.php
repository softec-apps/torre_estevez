<!-- jQuery 3 --> 
<script src="dist/js/jquery.min.js"></script> 

<!-- v4.0.0-alpha.6 --> 
<script src="dist/bootstrap/js/bootstrap.min.js"></script> 

<!-- template --> 
<script src="dist/js/niche.js"></script> 

<!-- DataTable --> 
<script src="dist/plugins/datatables/jquery.dataTables.min.js"></script> 
<script src="dist/plugins/datatables/dataTables.bootstrap.min.js"></script> 
<!-- Buttons -->
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>

<script>
$(function () {
  $('#pacientes').DataTable({
    dom: 'Bfrtip',
    pageLength: 3,
    buttons: [
      {
        extend: 'excel',
        text: '<i class="fa fa-file-excel-o"></i> EXCEL',
        className: 'btn bg-aqua',
        title: 'Lista de Pacientes',
        filename: 'Lista de Pacientes',
        exportOptions: {
        columns: ':not(:last)'
    }
      },
      {
        extend: 'pdf',
        text: '<i class="fa fa-file-pdf-o"></i> PDF',
        className: 'btn bg-aqua',
        title: 'Lista de Pacientes',
        filename: 'Lista de Pacientes',
        exportOptions: {
        columns: ':not(:last)'
    }

      },
      {
        extend: 'print',
        text: '<i class="fa fa-print"></i> IMPRIMIR',
        className: 'btn bg-aqua',
        title: 'Lista de Pacientes',
        exportOptions: {
          columns: ':not(:last)'
        }
      }
    ],
    "language": {
      "lengthMenu": "Mostrar _MENU_ registros por página",
      "zeroRecords": "No se encontro ningun paciente",
      "info": "Mostrando la página _PAGE_ de _PAGES_",
      "infoEmpty": "No records available",
      "infoFiltered": "(filtrado de _MAX_ registros totales)",
      "search": "Buscar Paciente:",
      "paginate": {
        "first":      "Primero",
        "last":       "Último",
        "next":       "Siguiente",
        "previous":   "Anterior"
      },
    }
  })
})
</script>



<script src="dist/plugins/hmenu/ace-responsive-menu.js" type="text/javascript"></script>
<!--Plugin Initialization-->
<script type="text/javascript">
  $(document).ready(function() {
    $("#respMenu").aceResponsiveMenu({
      resizeWidth: '768', // Set the same in Media query       
      animationSpeed: 'fast', //slow, medium, fast
      accoridonExpAll: false //Expands all the accordion menu on click
    });
  });
</script>

</body>

</html>