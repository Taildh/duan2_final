<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>

<script src="{{ asset('admin/assets/global/plugins/respond.min.js')}}"></script>
<script src="{{ asset('admin/assets/global/plugins/excanvas.min.js')}}"></script>
<![endif]-->
<script type='text/javascript' src='https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js'></script>
<script type='text/javascript' src='https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js'></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.2.6/js/dataTables.select.min.js"></script>
<script type='text/javascript'
        src='https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.10/js/dataTables.checkboxes.min.js'></script>
<script type="text/javascript"  src="{{ asset('ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript"  src="{{ asset('ckfinder/ckfinder.js')}}"></script>
<script src="{{ asset('admin/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/global/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js')}} before bootstrap.min.js')}} to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{ asset('admin/assets/global/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/global/plugins/jquery.cokie.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('admin/assets/global/plugins/flot/jquery.flot.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/global/plugins/flot/jquery.flot.resize.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/global/plugins/flot/jquery.flot.categories.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/global/plugins/jquery.pulsate.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/global/plugins/bootstrap-daterangepicker/moment.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js')}} for drag & drop support -->
<script src="{{ asset('admin/assets/global/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('admin/assets/global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/admin/layout/scripts/layout.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/admin/layout/scripts/quick-sidebar.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/admin/layout/scripts/demo.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/admin/pages/scripts/index.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/admin/pages/scripts/tasks.js')}}" type="text/javascript"></script>
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="{{ asset('admin/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
<script type='text/javascript' src='https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js'></script>

<!-- END PAGE LEVEL STYLES -->
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
   Index.init();
   Index.initDashboardDaterange();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Tasks.initDashboardWidget();
});
</script>

<script type="text/javascript">
   $(function() {
      $.getScript("{{asset('js/bootstrap-confirm-delete.js')}}", function(){
          $('.delete').bootstrap_confirm_delete({
              heading: 'Delete',
              message: 'Bạn có chắc chắn muốn xóa không?'
          });
      });
  });
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
  $('.xoa').on('click', function(){
    var removeUrl = $(this).attr('linkurl');
    swal({
      title: "Cảnh báo",
      text: "Bạn có chắc chắn muốn xoá danh mục này không?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location.href = removeUrl;
      } 
    });
  });
</script>

<!-- END JAVASCRIPTS -->

