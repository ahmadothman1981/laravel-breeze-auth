<!doctype html>
<html lang="en">
@include('front.partials.head')


<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('front.partials.sidebar')
    
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('front.partials.header')
     
      <!--  Header End -->
      @yield('content')
      
    </div>
  </div>
  @include('front.partials.scripts')
  
</body>

</html>