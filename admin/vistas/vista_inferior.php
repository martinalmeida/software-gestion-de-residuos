      <!-- End of Main Content -->

      <!-- Footer PIE DE PAGINA -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span class="derechos">Copyright &copy; ECOTEC 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer FIN PIE DE PAGINA-->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><b><i class="fas fa-home"></i> ECOTEC Software</b></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Desea Cerrar Sesión?</div>
        <div class="modal-footer">
          <button class="btn btn-danger btn-can" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-success btn-cerrar" href="../php/logout2.php">Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </div>



        <!-------------------- SCRIPTS DE LA PÁGINA---------------------->


        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        
        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Bootstrap tooltips -->
        <script type="../text/javascript" src="js/popper.min.js"></script>
        
        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>

         <!-- plugins modal js -->
        <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>

        <!-- Estilos personalizados -->
        <script type="text/javascript" src="../js/estilos-admin.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="../js/mdb.min.js"></script>

        <!-- TinyMCE (Editor de texto WYSIWYG con Bootstrap) -->
        <script src="https://cdn.tiny.cloud/1/2c8ty8ul2b0s6f1prlxb9ao2hm2xqvxbajg2hmg74njai8rk/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

          <!-- datatables JS -->
        <script type="text/javascript" src="../vendor/datatables/datatables.min.js"></script>

        <script type="text/javascript">
        $(document).ready(function(){
            tablaPersonas = $("#tablaPersonas").DataTable({        
            "language": {
                    "lengthMenu": "Mostrar _MENU_ ",
                    "zeroRecords": "No se encontraron resultados",
                    "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sSearch": "Buscar:",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast":"Último",
                        "sNext":"Siguiente",
                        "sPrevious": "Anterior"
                     },
                     "sProcessing":"Procesando...",
                }
            });
            
        });
        </script> 



