</div>
    </div>
  </div>
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Page Dashboard</b> 
    </div>
    <strong>Copyright &copy; @ Arrancar</strong> 
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="<?= base_url ('assets/template')?>/plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/template')?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/template')?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/template')?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/template')?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/template')?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/template')?>/dist/js/adminlte.min.js"></script>
<script src="<?= base_url('assets/template')?>/dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>