<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ url('public/js/app.js') }}" type="text/javascript"></script>
<script src="{{ url('public/js/app-landing.js') }}" type="text/javascript"></script>
<script src="{{ url('public/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ url('public/js/jquery-3.1.1.min.js') }}" type="text/javascript"></script>


<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity=" crossorigin="anonymous"></script> -->


<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>
