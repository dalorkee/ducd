<!-- jQuery 3 -->
{{ Html::script(('public/vendor/AdminLTE-2.4.2/bower_components/jquery/dist/jquery.min.js')) }}
<!-- Bootstrap 3.3.7 -->
{{ Html::script(('public/vendor/AdminLTE-2.4.2/bower_components/bootstrap/dist/js/bootstrap.min.js')) }}
<!-- FastClick -->
{{ Html::script(('public/vendor/AdminLTE-2.4.2/bower_components/fastclick/lib/fastclick.js')) }}
<!-- AdminLTE App -->
{{ Html::script(('public/vendor/AdminLTE-2.4.2/dist/js/adminlte.min.js')) }}
<!-- Sparkline -->
{{ Html::script(('public/vendor/AdminLTE-2.4.2/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')) }}
<!-- SlimScroll -->
{{ Html::script(('public/vendor/AdminLTE-2.4.2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')) }}
<!-- AdminLTE for demo purposes -->
{{ Html::script(('public/vendor/AdminLTE-2.4.2/dist/js/demo.js')) }}
<!-- Bootstrap Tree -->
{{ Html::script(('public/vendor/bootstrap-tree/minimal-tree-table.js')) }}
<!-- DataTables -->
{{ Html::script(('public/vendor/AdminLTE-2.4.2/bower_components/datatables.net/js/jquery.dataTables.min.js')) }}
{{ Html::script(('public/vendor/AdminLTE-2.4.2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')) }}
<!-- illbeback -->
{{ Html::script(('public/vendor/components/illbeback/illbeback.js')) }}
<script>
$(document).ready(function () {
	$('.loader').fadeOut('slow');
	$('#flash-overlay-modal').modal();
	$("#scroll-to-top").illBeBack();
});
</script>
