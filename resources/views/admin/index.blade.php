<!DOCTYPE html>
<html>
  <head> 
  @include ('admin.css') 
  </head>
  <body>
   @include ('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
   @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
     <div class="page-content">
       @include('admin.body')
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{asset('vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{asset('vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{asset('js/charts-home.js') }}"></script>
    <script src="{{asset('js/front.js') }}"></script>
  </body>
</html>