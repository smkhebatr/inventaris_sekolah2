<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Layouts Admin')</title>
    <!--panggil font-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/js?family=Nuntio:200,200i,
    300,300i,600,600i,900,9001" rel="stylesheet">

    <!--panggil style dari tamplate-->
    <link href="{{ asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    @stack('styles')
 </head>
<body id="page-top">
    <div id="wrapper">
        @include('layouts.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include ('layouts.topbar') 
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-canter my-auto">
                <span>copyright &copy; SMK Texmaco {{date ('Y')}}</span>
            </div >
        </div>
    </footer>
</div>
</div>

<a class="scroll-to-top-rounded" href="#page-top">
    <i class"fas fa-angle-up"></i>
</a>
<i--Javascript Template-->
    <script> src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>   
    <script> src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script> src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script> src="{{ asset('js/sb-admin-2.min.js')}}"></script>
    @stack('script')
     
    
    
</html>