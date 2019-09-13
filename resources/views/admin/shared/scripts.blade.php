<!-- Required Jquery -->
<script  src="{{ asset('GradientAble/files/bower_components/jquery/js/jquery.min.js') }}"></script>
<script  src="{{ asset('GradientAble/files/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script  src="{{ asset('GradientAble/files/bower_components/popper.js/js/popper.min.js') }}"></script>
<script  src="{{ asset('GradientAble/files/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- jquery slimscroll js -->
<script  src="{{ asset('GradientAble/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
<!-- modernizr js -->
<script  src="{{ asset('GradientAble/files/bower_components/modernizr/js/modernizr.js') }}"></script>
<script  src="{{ asset('GradientAble/files/bower_components/modernizr/js/css-scrollbars.js') }}"></script>
<!-- Syntax highlighter prism js -->
<script  src="{{ asset('GradientAble/files/assets/pages/prism/custom-prism.js') }}"></script>
<!-- data-table js -->
<script src="{{ asset('GradientAble/files/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('GradientAble/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('GradientAble/files/assets/pages/data-table/js/jszip.min.js') }}"></script>
<script src="{{ asset('GradientAble/files/assets/pages/data-table/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('GradientAble/files/assets/pages/data-table/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('GradientAble/files/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('GradientAble/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('GradientAble/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('GradientAble/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('GradientAble/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<!-- pnotify js -->
<script src="{{ asset('GradientAble/files/bower_components/pnotify/js/pnotify.js') }}"></script>
<script  src="{{ asset('GradientAble/files/bower_components/pnotify/js/pnotify.desktop.js') }}"></script>
<script  src="{{ asset('GradientAble/files/bower_components/pnotify/js/pnotify.buttons.js') }}"></script>
<script  src="{{ asset('GradientAble/files/bower_components/pnotify/js/pnotify.confirm.js') }}"></script>
<script  src="{{ asset('GradientAble/files/bower_components/pnotify/js/pnotify.callbacks.js') }}"></script>
<script  src="{{ asset('GradientAble/files/bower_components/pnotify/js/pnotify.animate.js') }}"></script>
<script  src="{{ asset('GradientAble/files/bower_components/pnotify/js/pnotify.history.js') }}"></script>
<script  src="{{ asset('GradientAble/files/bower_components/pnotify/js/pnotify.mobile.js') }}"></script>
<script  src="{{ asset('GradientAble/files/bower_components/pnotify/js/pnotify.nonblock.js') }}"></script>
<script  src="{{ asset('GradientAble/files/assets/pages/pnotify/notify.js') }}"></script>
<!-- sweet alert js -->
<script  src="{{ asset('GradientAble/files/bower_components/sweetalert/js/sweetalert.min.js') }}"></script>
<!-- modalEffects js nifty modal window effects -->
<script src="{{ asset('GradientAble/files/assets/js/classie.js') }}"></script>
<script  src="{{ asset('GradientAble/files/assets/js/modalEffects.js') }}"></script>
<!-- Bootstrap date-time-picker js -->
<script src="{{ asset('GradientAble/files/assets/pages/advance-elements/moment-with-locales.min.js') }}"></script>
<script src="{{ asset('GradientAble/files/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('GradientAble/files/assets/pages/advance-elements/bootstrap-datetimepicker.min.js') }}"></script>
<!-- Date-range picker js -->
<script src="{{ asset('GradientAble/files/bower_components/bootstrap-daterangepicker/js/daterangepicker.js') }}"></script>
<!-- Date-dropper js -->
<script src="{{ asset('GradientAble/files/bower_components/datedropper/js/datedropper.min.js') }}"></script>
<!-- Color picker js -->
<script src="{{ asset('GradientAble/files/bower_components/spectrum/js/spectrum.js') }}"></script>
<script src="{{ asset('GradientAble/files/bower_components/jscolor/js/jscolor.js') }}"></script>
<!-- Mini-color js -->
<script src="{{ asset('GradientAble/files/bower_components/jquery-minicolors/js/jquery.minicolors.min.js') }}"></script>
<!-- Parsley js -->
<!-- validator -->
<script src="{{ asset('GradientAble/files/assets/pages/parsleyjs/parsley.min.js') }}"></script>
@if (Session::get('lang') == 'es' || Session::get('lang') == null)
<script src="{{ asset('GradientAble/files/assets/pages/parsleyjs/i18n/es.js') }}"></script>   
@endif
<!-- Select 2 js -->
<script  src="{{ asset('GradientAble/files/bower_components/select2/js/select2.full.min.js') }}"></script>
<!-- Editable-table js -->
<!-- <script  src="{{ asset('js/jquery.tabledit.js') }}"></script> -->
@stack('scripts')
<!-- Custom js -->
<script src="{{ asset('GradientAble/files/assets/js/pcoded.min.js') }}"></script>
<script src="{{ asset('GradientAble/files/assets/js/vertical/menu/menu-compact.js') }}"></script>
<script src="{{ asset('GradientAble/files/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script  src="{{ asset('GradientAble/files/assets/js/script.js') }}"></script>


