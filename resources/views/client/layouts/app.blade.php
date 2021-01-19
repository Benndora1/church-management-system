<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Urella | @yield('title')</title>
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('/assets/img/apple-touch-icon.png') }}" sizes="180x180">
    <link rel="icon" href="{{ asset('/assets/img/favicon-32x32.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('/assets/img/favicon-16x16.png') }}" sizes="16x16" type="image/png">
    <link rel="manifest" href="{{ asset('/assets/img/manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('/assets/img/safari-pinned-tab.svg') }}" color="#7952b3">
    <link rel="icon" href="{{ asset('/favicon.ico') }}">
    <meta name="theme-color" content="#7952b3">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
     <link href="{{ asset('assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('assets/libs/css/style.css')}}">
     <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
     <link rel="stylesheet" href="{{ asset('assets/vendor/charts/morris-bundle/morris.css')}}">
     <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">

      <link href="{{ asset('assets/sweetalert2/dist2/sweetalert.css') }}" rel="stylesheet">
       <script src="{{ asset('assets/sweetalert2/dist2/sweetalert.js') }}"></script>

@yield('style')
<style>
.bg-blue {
  background-color: #0e0e28!important;
}

  </style>

</head>

<body>
    <div id="app">
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
	    <!-- ============================================================== -->


    <!--  BEGIN NAVBAR  -->
    @section('navbar')
    @show
    <!--  END NAVBAR  -->

    <!--  BEGIN SIDEBAR  -->

        @section('sidebar')
        @show


    <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div class="dashboard-wrapper">
	        <div class="dashboard-influence">
	            <div class="container-fluid dashboard-content">
	                <!-- ============================================================== -->
	                <!-- pageheader  -->
	                <!-- ============================================================== -->
	                <div class="row">
	                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	                        <div class="page-header">
	                            <h3 class="mb-2">Home </h3>

	                            <div class="page-breadcrumb">
	                                <nav aria-label="breadcrumb">
	                                    <ol class="breadcrumb">
	                                        <li class="breadcrumb-item"><a href="{{url('/') }}" class="breadcrumb-link">Dashboard</a></li>
	                                        <li class="breadcrumb-item active" aria-current="page"></li>
	                                    </ol>
	                                </nav>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- ============================================================== -->
	                <!-- end pageheader  -->
	                <!-- ============================================================== -->
                    <!-- ============================================================== -->

                @yield('content')

            </div>
        </div>
       
                      <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            &copy; <?php
                            $copyYear = 2020;
                            $curYear = date('Y');
                            echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
                            ?>   <a href="https://cms.org/">{{ config('app.name', 'CMS') }}</a>, Inc.  &mdash; All Rights Reserved
                            Dev by <a href="https://www.cms.com">CMS</a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
<!-- bootstap bundle js -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<!-- slimscroll js -->
<script src="{{ asset('assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
<!-- main js -->
<script src="{{ asset('assets/libs/js/main-js.js')}}"></script>
<!-- morris-chart js -->
<script src="{{ asset('assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
<script src="{{ asset('assets/vendor/charts/morris-bundle/morris.js')}}"></script>
<script src="{{ asset('assets/vendor/charts/morris-bundle/morrisjs.html')}}"></script>
<!-- chart js -->
<script src="{{ asset('assets/vendor/charts/charts-bundle/Chart.bundle.js')}}"></script>
<script src="{{ asset('assets/vendor/charts/charts-bundle/chartjs.js')}}"></script>

@yield('javascript')
@foreach (['error', 'success'] as $status)
@if(Session::has($status))
{{-- <div class="alert alert-{{$status}}"> --}}
<?php
$message=Session::get($status);
$nameapp=config('app.name', 'Wordarena');
//sweetalert code
echo "<script>";

echo 'swal({
title: "'.$nameapp.'",
text: "'.$message.'",
timer: 5000,
type: "'.$status.'",
showCloseButton: true,
showCancelButton: false


})';
echo '</script>';
?>

          {{-- </div> --}}

@endif
@endforeach
</div>
</body>

</html>
