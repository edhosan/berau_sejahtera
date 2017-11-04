<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Vendor styles -->
      @section('vendor-styles')
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/animate.css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css') }}">
      @show

      <!-- App styles -->
      <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
  </head>
  <body data-ma-theme="green">
    <main class="main">
      <div class="page-loader">
          <div class="page-loader__spinner">
              <svg viewBox="25 25 50 50">
                  <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
              </svg>
          </div>
      </div>

      <header class="header">
        @include ('include.header')
      </header>

      <aside class="sidebar">
        @include ('include.sidebar')
      </aside>

     <section class="content">
       @yield('content')
       <footer class="footer hidden-xs-down">
          @include ('include.footer')
      </footer>
     </section>


    </main>
  <!-- Older IE warning message -->
    <!--[if IE]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

            <div class="ie-warning__downloads">
                <a href="http://www.google.com/chrome">
                    <img src="img/browsers/chrome.png" alt="">
                </a>

                <a href="https://www.mozilla.org/en-US/firefox/new">
                    <img src="img/browsers/firefox.png" alt="">
                </a>

                <a href="http://www.opera.com">
                    <img src="img/browsers/opera.png" alt="">
                </a>

                <a href="https://support.apple.com/downloads/safari">
                    <img src="img/browsers/safari.png" alt="">
                </a>

                <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                    <img src="img/browsers/edge.png" alt="">
                </a>

                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="img/browsers/ie.png" alt="">
                </a>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->

  <!-- Javascript -->
    <!-- Vendors -->
    @section('vendors-script')
      <script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
      <script src="{{ asset('vendors/bower_components/tether/dist/js/tether.min.js') }}"></script>
      <script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('vendors/bower_components/Waves/dist/waves.min.js') }}"></script>
      <script src="{{ asset('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
      <script src="{{ asset('vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js') }}"></script>
      <script src="{{ asset('vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') }}"></script>
    @show

    <!-- App functions and actions -->
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script type="text/javascript">
       @foreach($errors->all() as $message)
         $.notify({
           message: '{{ $message }}'
           },{
           type: 'danger'
         });
       @endforeach

       @if(Session::has('flash_message'))
         $.notify({
           message: '{!! session('flash_message') !!}'
           },{
           type: 'info'
         });
       @endif
    </script>
    @stack('scripts')
  </body>
</html>
